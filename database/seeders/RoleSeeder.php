<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => config('constants.roles.admin')])->givePermissionTo(config('constants.permissions.admin'));
        Role::create(['name' => config('constants.roles.user')])->givePermissionTo(config('constants.permissions.user'));
    }
}
