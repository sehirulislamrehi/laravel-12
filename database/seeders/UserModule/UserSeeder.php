<?php

namespace Database\Seeders\UserModule;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "id" => 1,
                "name" => "Super Admin",
                "email" => "superadmin@gmail.com",
                "phone" => "1234567890",
                "password" => Hash::make("123456"),
                "is_super_admin" => true,
                "is_active" => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        ]);
    }
}
