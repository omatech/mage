<?php

namespace Omatech\Mage\Database\Seeds;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert( [
            0 =>
             [
                'name' => 'God',
                'guard_name' => 'web',
            ],
        ]);
    }
}
