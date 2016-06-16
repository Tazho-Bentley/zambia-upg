<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name="Mukuma Musenge";
        $user->email="kuma.musenge@gmail.com";
        $user->password=bcrypt('kuma1993');
        $user->role= 0;
        $user->save();

        $user = new User();
        $user->name="Mukuma Musenge";
        $user->email="musenge@gmail.com";
        $user->password=bcrypt('kuma1993');
        $user->role= 1;
        $user->save();
    }
}
