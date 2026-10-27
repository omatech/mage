<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert( [
            0 =>
             [
                'name' => 'mage-access',
                'guard_name' => 'web',
            ],
            1 =>
             [
                'name' => 'mage-access-admin-zone',
                'guard_name' => 'web',
            ],
            2 =>
             [
                'name' => 'mage-access-users-management-zone',
                'guard_name' => 'web',
            ],
            3 =>
             [
                'name' => 'mage-access-users-zone',
                'guard_name' => 'web',
            ],
            4 =>
             [
                'name' => 'mage-access-roles-zone',
                'guard_name' => 'web',
            ],
            5 =>
             [
                'name' => 'mage-access-permissions-zone',
                'guard_name' => 'web',
            ],
            6 =>
             [
                'name' => 'mage-access-translations-zone',
                'guard_name' => 'web',
            ],
        ]);
    }
}
