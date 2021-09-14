<?php

namespace Database\Seeders;

use App\Models\Cuestomer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CuestomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuestomer::create([
            'name'=>'CLIENTE',
            'lastname'=>'GENERICO',
            'dni'=>1,
            'telephone'=>'03850000000',
            'email'=>'clientegenerico@gmail.com',
        ]);
    }
}
