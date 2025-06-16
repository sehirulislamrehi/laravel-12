<?php

namespace Database\Seeders\UserModule;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("DELETE FROM permissions");
        DB::table('permissions')->insert([
            [
                'id' => 1,
                'key' => 'user_module',
                'display_name' => 'User Module',
                'module_id' => 1,
            ],
            [
                'id' => 2,
                'key' => 'manage_user',
                'display_name' => 'Manage User',
                'module_id' => 1,
            ],
            [
                'id' => 3,
                'key' => 'manage_role',
                'display_name' => 'Manage Role',
                'module_id' => 1,
            ],
        ]);
    }
}
