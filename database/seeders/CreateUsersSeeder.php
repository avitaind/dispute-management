<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'info@ashplan.media',
               'is_admin'=>'1',
               'password'=> bcrypt('Ashplan@1234'),

            ],

            [

               'name'=>'User',
               'email'=>'sandy4u1994@gmail.com',
               'is_admin'=>'0',
               'password'=> bcrypt('123456'),

            ],

        ];

  

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
