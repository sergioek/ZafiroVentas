<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

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
            'name'=>'Camila Khairallah',
            'phone'=>'385450897',
            'email'=>'camilaloki@gmail.com',
            'profile'=>'EMPLOYEE',
            'status'=>'ACTIVE',
            'password'=>bcrypt('kefotopc01'),
        ]);

        User::create([
            'name'=>'Sergio Khairallah',
            'phone'=>'385450897',
            'email'=>'khairallahsergio4@gmail.com',
            'profile'=>'ADMIN',
            'status'=>'ACTIVE',
            'password'=>bcrypt('kefotopc01'),
        ]);
    }
}
