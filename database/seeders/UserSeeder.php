<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name'       => 'user',
                'email'      => 'user@user.com',
                'address'    => 'Surabaya',
                'telephone'  => '628123456789',
                'password'   => bcrypt('asdasdasd'),
                'role_id'    => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ]
        ];

        foreach ($datas as $key => $value) {
            
            $user = User::create($value);
        }


        // User::first()->membership()->create(['jumlah_poin' => 0]);
    }
}
