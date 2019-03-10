<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'name' => 'mage-access-admin-zone',
                'guard_name' => 'web',
            ),
            1 => 
            array (
                'name' => 'mage-access-users-management-zone',
                'guard_name' => 'web',
            ),
            2 => 
            array (
                'name' => 'mage-access-users-zone',
                'guard_name' => 'web',
            ),
            3 => 
            array (
                'name' => 'mage-access-roles-zone',
                'guard_name' => 'web',
            ),
            4 => 
            array (
                'name' => 'mage-access-permissions-zone',
                'guard_name' => 'web',
            ),
            5 => 
            array (
                'name' => 'mage-access-translations-zone',
                'guard_name' => 'web',
            ),
        ));
    }
}