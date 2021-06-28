<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'SoyAdmi',
            'email' => 'SoyAdmi@gmail.com', 
            'email_verified_at' => now(), 
            'password' => Hash::make('password'), 
            'isAdmin' => true
        ]); 
        User::create([
            'name' => 'NoSoyAdmi',
            'email' => 'NoSoyAdmi@gmail.com', 
            'email_verified_at' => now(), 
            'password' => Hash::make('password'), 
            'isAdmin' => false
        ]); 
    }
}
