<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
                'name' => 'Admin',
            ],
            [
                'name' => 'staff',
            ],
            [
                'name' => 'user',
            ],
        ];
        
        Role::insert($datas);
    }
}
