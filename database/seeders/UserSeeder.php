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
            'name'=>'Frank Rix',
            'phone'=>'0000000',
            'email'=>'empleado@gmail.com',
            'status'=>'ACTIVE',
            'password'=>bcrypt('empleado'),
        ])->assignRole('EMPLOYEE');
        
       

        User::create([
            'name'=>'Wiliams Bart',
            'phone'=>'0000000',
            'email'=>'administrador@gmail.com',
            'status'=>'ACTIVE',
            'password'=>bcrypt('administrador'),
        ])->assignRole('ADMIN');
    }
}
