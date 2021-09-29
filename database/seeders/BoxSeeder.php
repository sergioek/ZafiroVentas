<?php

namespace Database\Seeders;

use App\Models\Box;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $box=Box::create([
            'date'=>$date=Carbon::now()->format('Y-m-d'),
            'status'=>'OPEN',
            'amount'=>0,
            'notes'=>'Caja de ejemplo',
            'user_id'=>1,
        ]);


        $box=Box::create([
            'date'=>$date=Carbon::now()->format('Y-m-d'),
            'status'=>'EXTRACT',
            'amount'=>0,
            'notes'=>'Caja de ejemplo',
            'user_id'=>1,
        ]);


        $box=Box::create([
            'date'=>$date=Carbon::now()->format('Y-m-d'),
            'status'=>'CLOSE',
            'amount'=>0,
            'notes'=>'Caja de ejemplo',
            'user_id'=>1,
        ]);
    }
}
