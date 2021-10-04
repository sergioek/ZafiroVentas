<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Jeans',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'1',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>1,
            'waist_id'=>1,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Jeans
            ',
        ]);

        Product::create([
            'name'=>'Camisas',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'2',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>2,
            'waist_id'=>2,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Camisas
            ',
        ]);

        Product::create([
            'name'=>'Camisetas',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'3',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>3,
            'waist_id'=>3,

            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Camisetas
            ',
        ]);

        Product::create([
            'name'=>'Chomba',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'4',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>4,
            'waist_id'=>3,

            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Chomba
            ',
        ]);

        Product::create([
            'name'=>'Campera',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'5',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>5,
            'waist_id'=>3,

            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Campera
            ',
        ]);

        Product::create([
            'name'=>'Chupin',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'6',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>6,
            'waist_id'=>3,

            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Chupin
            ',
        ]);

        Product::create([
            'name'=>'Short',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'7',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>4,
            'waist_id'=>7,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Shorts
            ',
        ]);


        Product::create([
            'name'=>'Calzas',
            'mark_id'=>1,
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'8',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>8,
            'waist_id'=>3,

            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Calzas
            ',
        ]);

    
    }
}
