<?php

use Illuminate\Database\Seeder;

class MTNMoneytUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\MTNMoney();
        $user->phone="0966654321";
        $user->balance=1000;
        $user->first_name="John";
        $user->last_name="Doe";
        $user->pin=1234;
        $user->save();

        $user = new \App\MTNMoney();
        $user->phone="0966000000";
        $user->balance=5000;
        $user->first_name="Jane B";
        $user->last_name="Doe";
        $user->pin=0000;
        $user->save();

        $user = new \App\MTNMoney();
        $user->phone="0966123456";
        $user->balance=400;
        $user->first_name="Doe";
        $user->last_name="Jane";
        $user->pin=4321;
        $user->save();


    }
}
