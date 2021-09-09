<?php

namespace Database\Seeders;

use App\Models\Denominations;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denominations::create([
            'type'=>'MONEDA',
            'value'=>1,
        ]);

        Denominations::create([
            'type'=>'MONEDA',
            'value'=>2,
        ]);

        Denominations::create([
            'type'=>'MONEDA',
            'value'=>5,
        ]);


        Denominations::create([
            'type'=>'BILLETE',
            'value'=>10,
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>20,
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>50,
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>100,
        ]);


        Denominations::create([
            'type'=>'BILLETE',
            'value'=>200,
        ]);


        Denominations::create([
            'type'=>'BILLETE',
            'value'=>500,
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>1000,
        ]);

    }
}
