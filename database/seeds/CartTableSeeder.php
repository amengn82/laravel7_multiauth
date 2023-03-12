<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert(
            array(
                [
                    'user_id' => 2,
                    'menu_id' => 4,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 2,
                    'menu_id' => 7,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 2,
                    'menu_id' => 9,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 2,
                    'menu_id' => 11,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 11,
                    'menu_id' => 1,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 11,
                    'menu_id' => 2,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 11,
                    'menu_id' => 3,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 13,
                    'menu_id' => 6,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 13,
                    'menu_id' => 8,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 13,
                    'menu_id' => 11,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 9,
                    'menu_id' => 2,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 9,
                    'menu_id' => 3,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 9,
                    'menu_id' => 5,
                    'status' => 'ordered',
                ],
                [
                    'user_id' => 9,
                    'menu_id' => 7,
                    'status' => 'ordered',
                ],
            )
        );
    }
}
