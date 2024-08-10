<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'list user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'list blog']);
        Permission::create(['name' => 'create blog']);
        Permission::create(['name' => 'edit blog']);
        Permission::create(['name' => 'delete blog']);

        Permission::create(['name' => 'list estimate page']);
        
        Permission::create(['name' => 'list role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'edit role']);

        $role2 = Role::create(['name' => 'Admin']);
        $role2->givePermissionTo('list user');
        $role2->givePermissionTo('create user');
        $role2->givePermissionTo('edit user');
        $role2->givePermissionTo('delete user');

        $role2->givePermissionTo('list blog');
        $role2->givePermissionTo('create blog');
        $role2->givePermissionTo('edit blog');
        $role2->givePermissionTo('delete blog');

        $role2->givePermissionTo('list estimate page');

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
        ]);
        $user->assignRole($role2);


        $role3 = Role::create(['name' => 'Super-Admin']);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@test.com',
        ]);
        $user->assignRole($role3);
        
    }
}
