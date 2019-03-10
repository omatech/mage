<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 =>
            array (
                'name' => 'God',
                'guard_name' => 'web',
            ),
        ));
    }
}
