<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);
        $admin->assignRole(config('constants.roles.admin'));

        $user = User::find(3);
        $user->assignRole(config('constants.roles.user'));
    }
}
