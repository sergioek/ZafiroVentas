<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name'=>'Zafiro Ropa Informal',
            'address'=>'Av. Jesus Fernandez Nº256',
            'phone'=>'0385-4911351',
            'CUIT'=>'27-28704133-6',
        ]);

    }
}
