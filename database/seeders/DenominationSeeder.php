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
            'type'=>'CONTADO',
            'value'=>1,
        ]);

        Denominations::create([
            'type'=>'CONTADO',
            'value'=>2,
        ]);

        Denominations::create([
            'type'=>'CONTADO',
            'value'=>5,
        ]);


        Denominations::create([
            'type'=>'CONTADO',
            'value'=>10,
        ]);

        Denominations::create([
            'type'=>'CONTADO',
            'value'=>20,
        ]);

        Denominations::create([
            'type'=>'CONTADO',
            'value'=>50,
        ]);

        Denominations::create([
            'type'=>'CONTADO',
            'value'=>100,
        ]);


        Denominations::create([
            'type'=>'CONTADO',
            'value'=>200,
        ]);


        Denominations::create([
            'type'=>'CONTADO',
            'value'=>500,
        ]);

        Denominations::create([
            'type'=>'CONTADO',
            'value'=>1000,
        ]);


        Denominations::create([
            'type'=>'TARJETA',
            'value'=>0,
        ]);

        Denominations::create([
            'type'=>'OTRO',
            'value'=>0,
        ]);

    }
}
