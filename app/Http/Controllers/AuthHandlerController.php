<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthHandlerController extends Controller
{
    //login auth
    private function login(Request $request): bool
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return true;
        }
        return false;
    }

    public function loginByRole(Request $request)
    {
        switch ($request['role']) {
            case null:
            {
                if ($this->login($request)) {
                    if (Auth::user()->role_id != '3') {
                        return redirect()->intended('/admin/dashboard');
                    }
                }
                return redirect("/admin/login")->withErrors('Login details are not valid');
            }
            case '3':
            {
                if ($this->login($request)) {
                    if (Auth::user()->role_id == '3') {
                        return redirect()->intended('/');
                    }
                }
                Session::flush();
                Auth::logout();
                return redirect("/login")->withErrors('Login details are not valid');
            }
        }
    }


    //registerAuth
    public function createUser(array $data, int $role)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'telephone' => $data['telephone'],
                'role_id' => $role,
            ]);

            if ($data['role'] != 3) {
                DB::commit();
                return $user;
            }

            $membership = $user->membership()->create([
                'jumlah_poin' => 0
            ]);

            $user->update([
                "membership_id" => $membership['id']
            ]);

            DB::commit();
            return $user;
        } catch (\Exception $ex) {
            DB::rollBack();
            throw $ex;
        }
    }


    private function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string'],
            'telephone' => ['required', 'string', 'min:12']
        ]);

        try {
            $data = $request->all();
            $this->createUser($data, $request['role']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return "ok";
    }

    public function registerByRole(Request $request)
    {
        $regisStatus = $this->register($request);
        switch ($request['role']) {
            case '1':
            {
                if ($regisStatus == 'ok') {
                    return redirect()->intended('/admin/login');
                } else {
                    return redirect()->back()->withErrors($regisStatus);
                }
            }
            case '2':
            {
                if ($regisStatus == 'ok') {
                    return redirect()->back()->with('success', 'account register success');
                } else {
                    return redirect()->back()->withErrors($regisStatus);
                }
            }
            case '3':
            {
                if ($regisStatus == 'ok') {
                    return redirect()->intended('/login');
                } else {
                    return redirect()->back()->withErrors($regisStatus);
                }
            }
        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
