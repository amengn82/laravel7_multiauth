<?php

use Illuminate\Database\Seeder;
use App\User;

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
               'email'=>'admin@admin.com',
               'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User1',
               'email'=>'user1@user1.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User2',
               'email'=>'user2@user2.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User3',
               'email'=>'user3@user3.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User4',
               'email'=>'user4@user4.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User5',
               'email'=>'user5@user5.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User6',
               'email'=>'user6@user6.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User7',
               'email'=>'user7@user7.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User8',
               'email'=>'user8@user8.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User9',
               'email'=>'user9@user9.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User10',
               'email'=>'user10@user10.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User11',
               'email'=>'user11@user11.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User12',
               'email'=>'user12@user12.com',
               'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}