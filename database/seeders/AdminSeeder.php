<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
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
                'name'       => 'admin',
                'email'      => 'admin@admin.com',
                'address'    => 'Surabaya',
                'telephone'  => '628123456789',
                'password'   => bcrypt('asdasdasd'),
                'role_id'    => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        User::insert($datas);
    }
}
