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
        $user->email="user@user.com";
        $user->password=bcrypt('user1234');
        $user->role= 0;
        $user->save();


        $user = new User();
        $user->name="Mukuma Musenge";
        $user->email="admin@admin.com";
        $user->password=bcrypt('admin1234');
        $user->role= 1;
        $user->save();

        $user = new User();
        $user->name="Tazho Bentley";
        $user->email="tazho@upg.com";
        $user->password=bcrypt('Tazho1');
        $user->role= 1;
        $user->save();
    }
}
