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
            'name'=>'Jean Taverniti',
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'123456',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>1,
            'waist_id'=>1,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Jeans
            ',
        ]);

        Product::create([
            'name'=>'Camisas Taverniti',
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'123456',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>2,
            'waist_id'=>2,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Camisas
            ',
        ]);

        Product::create([
            'name'=>'Camisetas Taverniti',
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'123456',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>3,
            'waist_id'=>3,

            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Camisetas
            ',
        ]);

        Product::create([
            'name'=>'Shorts Taverniti',
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'123456',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>4,
            'waist_id'=>4,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Shorts
            ',
        ]);

        Product::create([
            'name'=>'Perfumes natura',
            'cost'=>1000,
            'price'=>2000,
            'brcode'=>'123456',
            'stock'=>10,
            'alerts'=>2,
            'color'=>'#ff0000',
            'category_id'=>5,
            'waist_id'=>5,
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Perfumes
            ',
        ]);
    }
}
