<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'JEANS',
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Jeans
            ',
        ]);


        Category::create([
            'name'=>'CAMISAS',
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Camisas
            ',
        ]);

        
        Category::create([
            'name'=>'CAMISETAS',
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Camisetas
            ',
        ]);

        
        Category::create([
            'name'=>'SHORTS',
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Shorts
            ',
        ]);

        
        Category::create([
            'name'=>'PERFUMES',
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Perfumes
            ',
        ]);

        
        Category::create([
            'name'=>'CALZAS',
            'image'=>'https://dummyimage.com/70x70/000000/fff&text=Calzas
            ',
        ]);
    }
}
