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
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$1
            ',
        ]);

        Denominations::create([
            'type'=>'MONEDA',
            'value'=>2,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$2
            ',
        ]);

        Denominations::create([
            'type'=>'MONEDA',
            'value'=>5,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$5
            ',
        ]);


        Denominations::create([
            'type'=>'BILLETE',
            'value'=>10,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$10
            ',
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>20,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$20
            ',
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>50,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$50
            ',
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>100,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$100
            ',
        ]);


        Denominations::create([
            'type'=>'BILLETE',
            'value'=>200,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$200
            ',
        ]);


        Denominations::create([
            'type'=>'BILLETE',
            'value'=>500,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$500
            ',
        ]);

        Denominations::create([
            'type'=>'BILLETE',
            'value'=>1000,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=$1000
            ',
        ]);

    }
}
