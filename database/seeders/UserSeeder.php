<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@transtory.com",
            'email_verified_at' => date("Y-m-d H:i:s", time()),
            'password' => Hash::make(env('DEFAULT_ADMIN_PASSWORD')),
            'is_admin' => true,
        ]);
    }
}
