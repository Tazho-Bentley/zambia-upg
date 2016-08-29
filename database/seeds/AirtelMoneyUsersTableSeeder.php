<?php

use Illuminate\Database\Seeder;

class AirtelMoneyUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\AirtelMoney();
        $user->phone="0977654321";
        $user->balance=1000;
        $user->first_name="Steve";
        $user->last_name="Maliaka";
        $user->pin=1234;
        $user->save();

        $user = new \App\AirtelMoney();
        $user->phone="0977000000";
        $user->balance=5000;
        $user->first_name="Jane B";
        $user->last_name="Silumzi";
        $user->pin=0000;
        $user->save();

        $user = new \App\AirtelMoney();
        $user->phone="0977123456";
        $user->balance=400;
        $user->first_name="Dundumwezi";
        $user->last_name="Banda";
        $user->pin=4321;
        $user->save();
    }
}
