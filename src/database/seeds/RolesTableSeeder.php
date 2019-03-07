<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'God',
                'guard_name' => 'web',
            ),
        ));
    }
}
