<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Role::create([
            'name' => 'admin',
            'description' => 'Đây là quyền admin'
        ]);
        Role::create([
            'name' => 'staff',
            'description' => 'Đây là quyền nhân viên'
        ]);
        Role::create([
            'name' => 'customer',
            'description' => 'Đây là quyền khách hàng'
        ]);
    }
}
