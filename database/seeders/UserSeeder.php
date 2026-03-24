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
        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        //     'avatar' => 'https://ui-avatars.com/api/?name=Admin&background=14b8a6&color=fff&size=128',
        // ]);
        // $admin->assignRole('admin');

        $doctor = User::create([
            'name' => 'John Doe',
            'email' => 'nakes@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://ui-avatars.com/api/?name=Dr.+John+Doe&background=14b8a6&color=fff&size=128',
        ]);
        $doctor->assignRole('nakes');

        $patient = User::create([
            'name' => 'Pasien',
            'email' => 'patient@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://ui-avatars.com/api/?name=Jane+Doe&background=14b8a6&color=fff&size=128',
        ]);
        $patient->assignRole('pasien');

        $patient = User::create([
            'name' => 'Irfan Yasin',
            'email' => 'irfan@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => 'https://ui-avatars.com/api/?name=Irfan+Yasin&background=14b8a6&color=fff&size=128',
        ]);
        $patient->assignRole('pasien');
    }
}
