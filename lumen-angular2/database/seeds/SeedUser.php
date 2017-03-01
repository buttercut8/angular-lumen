<?php

use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new App\User();
        $user1->first_name = "Remy Nguyen";
        $user1->phone = "0976830624";
        $user1->email = "remy@gmail.com";
        $user1->password = (new BcryptHasher)->make("2007");
        $user1->remember_token = str_random(100);
        $user1->save();


        $user2 = new App\User();
        $user2->first_name = "Mark Remy";
        $user2->phone = "0976830623";
        $user2->email = "chau@gmail.com";
        $user2->password = (new BcryptHasher)->make("2007");
        $user2->remember_token = str_random(100);
        $user2->save();
    }
}
