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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://ui-avatars.com/api/?name=Admin&background=random',
        ]);
        $admin->assignRole('admin');

        $doctor = User::create([
            'name' => 'Dr. John Doe',
            'email' => 'doctor@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://ui-avatars.com/api/?name=Dr.+John+Doe&background=random',
        ]);
        $doctor->assignRole('doctor');

        $patient = User::create([
            'name' => 'Jane Doe',
            'email' => 'patient@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://ui-avatars.com/api/?name=Jane+Doe&background=random',
        ]);
        $patient->assignRole('patient');
    }
}
