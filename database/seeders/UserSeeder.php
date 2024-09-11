<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
            'phone_number' => '082340966694',
            'photo_profile' => "https://ui-avatars.com/api/?name=admin&background=random"
        ])->assignRole('admin');

        // User::create([
        //     'name' => 'pemin',
        //     'email' => 'pemin@gmail.com',
        //     'password' => '12345678',
        //     'phone_number' => '082340956694',
        //     'photo_profile' => "https://ui-avatars.com/api/?name=admin&background=random"
        // ])->assignRole('admin');

        User::create([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => '12345678',
            'phone_number' => '082340956694',
            'photo_profile' => "https://ui-avatars.com/api/?name=member&background=random"
        ])->assignRole('member');
    }
}
