<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role = new Role;
        $role->id = 1;
        $role->name = "user";
        $role->save();

        $role = new Role;
        $role->id = 2;
        $role->name = "trainer";
        $role->save();

        $role = new Role;
        $role->id = 3;
        $role->name = "admin";
        $role->save();

    }
}
