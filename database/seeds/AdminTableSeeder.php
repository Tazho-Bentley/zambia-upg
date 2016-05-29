<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create admin
        $admin = new Admin();
        $admin->username="name";
        $admin->password=bcrypt("name");
        $admin->save();
    }
}
