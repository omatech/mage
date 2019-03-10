<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'mage-access-admin-zone',
                'guard_name' => 'web',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'mage-access-users-management-zone',
                'guard_name' => 'web',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'mage-access-users-zone',
                'guard_name' => 'web',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'mage-access-roles-zone',
                'guard_name' => 'web',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'mage-access-permissions-zone',
                'guard_name' => 'web',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'mage-access-translations-zone',
                'guard_name' => 'web',
            ),
        ));
    }
}