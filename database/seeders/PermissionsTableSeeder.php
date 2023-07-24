<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $client = Role::create(['name' => 'Client']);

        $manage_films   = Permission::create(['name' => 'Manage films']);
        $manage_clients = Permission::create(['name' => 'Manage clients']);
        $manage_sales   = Permission::create(['name' => 'Manage sales']);
        $make_sale   = Permission::create(['name' => 'Make sale']);
        $purchases   = Permission::create(['name' => 'Purchases']);
        $catalog   = Permission::create(['name' => 'Catalog']);

        $admin->givePermissionTo([
            $manage_films,
            $manage_clients,
            $manage_sales,
            $make_sale,
            $purchases,
            $catalog
        ]);

        $client->givePermissionTo([
            $catalog ,
            $make_sale,
            $purchases
        ]);
    }
}
