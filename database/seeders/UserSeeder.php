<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Camila Khairallah',
            'phone'=>'385450897',
            'email'=>'camila@gmail.com',
            'profile'=>'EMPLOYEE',
            'status'=>'ACTIVE',
            'password'=>bcrypt('nada'),
        ])->assignRole('ADMIN');
        
       

        User::create([
            'name'=>'Sergio Khairallah',
            'phone'=>'385450897',
            'email'=>'khairallahsergio4@gmail.com',
            'profile'=>'ADMIN',
            'status'=>'ACTIVE',
            'password'=>bcrypt('kefotopc01'),
        ])->assignRole('EMPLOYEE');
    }
}
