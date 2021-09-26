<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mark=Mark::create([
            'name'=>'OTRA MARCA',
            'provider'=>'DESCONOCIDO',
            'telephone'=>'00000000'
        ]);

       
    }
}
