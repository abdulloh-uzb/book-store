<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'seller']);
        Role::create(['name'=>'user']);


        Permission::create(['name'=>'create category']);
        Permission::create(['name'=>'edit category']);
        Permission::create(['name'=>'delete category']);
        Permission::create(['name'=>'create book']);
        Permission::create(['name'=>'edit book']);
        Permission::create(['name'=>'delete book']);
        Permission::create(['name'=>'create format']);
        Permission::create(['name'=>'edit format']);
        Permission::create(['name'=>'delete format']);
        Permission::create(['name'=>'create language']);
        Permission::create(['name'=>'edit language']);
        Permission::create(['name'=>'delete language']);

    }
}
