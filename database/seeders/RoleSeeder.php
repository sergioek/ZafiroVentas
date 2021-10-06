<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    use HasRoles;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::create(['name'=>'ADMIN']);
        $employee=Role::create(['name'=>'EMPLOYEE']);

        $permission = Permission::create(['name' => 'companies.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'companies.update'])->syncRoles($admin);


        $permission=Permission::create(['name' => 'categories.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'categories.show'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'categories.create'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'categories.store']);
        $permission = Permission::create(['name' => 'categories.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'categories.update'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'categories.destroy'])->syncRoles($admin);

        $permission = Permission::create(['name' => 'marks.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'marks.show'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'marks.create'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'marks.store'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'marks.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'marks.update'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'marks.destroy'])->syncRoles($admin);



        $permission = Permission::create(['name' => 'cuestomers.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'cuestomers.show'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'cuestomers.create'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'cuestomers.store'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'cuestomers.edit'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'cuestomers.update'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'cuestomers.destroy'])->syncRoles([$admin,$employee]);


        $permission = Permission::create(['name' => 'products.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'products.show'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'products.create'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'products.store'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'products.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'products.update'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'products.destroy'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'products.alert'])->syncRoles($admin);



        $permission = Permission::create(['name' => 'denominations.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'denominations.show'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'denominations.create'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'denominations.store'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'denominations.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'denominations.update'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'denominations.destroy'])->syncRoles($admin);


        $permission = Permission::create(['name' => 'carts.index'])->syncRoles([$admin,$employee]);



        
        $permission = Permission::create(['name' => 'sales.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.show'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.create'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.store'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.edit'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.update'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.destroy'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.cart'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.cancel'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'sales.cuestomer'])->syncRoles([$admin,$employee]);


        $permission = Permission::create(['name' => 'detailsale.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'detailsale.show'])->syncRoles([$admin,$employee]);



        $permission = Permission::create(['name' => 'boxes.index'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'boxes.show'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'boxes.create'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'boxes.store'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'boxes.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'boxes.update'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'boxes.destroy'])->syncRoles($admin);


        $permission = Permission::create(['name' => 'reports.index'])->syncRoles([$admin,$employee]);
        $permission = Permission::create(['name' => 'reports.month'])->syncRoles([$admin,$employee]);


        $permission = Permission::create(['name' => 'users.index'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'users.show'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'users.create'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'users.store'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'users.edit'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'users.update'])->syncRoles($admin);
        $permission = Permission::create(['name' => 'users.destroy'])->syncRoles($admin);

    }
}
