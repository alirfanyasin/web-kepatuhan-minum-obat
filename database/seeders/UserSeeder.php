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
        ]);
        $admin->assignRole('admin');

        $doctor = User::create([
            'name' => 'Dr. John Doe',
            'email' => 'doctor@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $doctor->assignRole('doctor');

        $patient = User::create([
            'name' => 'Jane Doe',
            'email' => 'patient@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $patient->assignRole('patient');
    }
}
