<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

class UserAccessSeeder extends Seeder
{
    /**
     * Assign roles to some default users.
     *
     * @return void
     */
    public function run()
    {
        /*Super Admin*/
        User::where('email', '=', 'admin@orpheus.digital')->first()
            ->assignRole('super-admin');

        /**App user */
        User::where('email', '=', 'admin@orpheus.digital')->first()
            ->assignRole('user');
    }
}
