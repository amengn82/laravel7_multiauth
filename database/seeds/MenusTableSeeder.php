<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(
            array(
                [
                    'name' => 'Carrot and mushroom gyros',
                    'image_url' => '23-51-17_rotimenu1.jpeg',
                    'detail' => 'Vegan',
                    'price' => 40,
                ],
                [
                    'name' => 'Chicken shawarma wrap',
                    'image_url' => '23-52-06_rotimenu2.jpg',
                    'detail' => 'Chicken',
                    'price' => 45,
                ],
                [
                    'name' => 'Instant Pot Beef Gyro',               
                    'image_url' => '23-52-55_rotimenu3.jpg',
                    'detail' => 'Beef',
                    'price' => 55,
                ],
                [
                    'name' => 'Falafel & shawarma dejaj sandwich',               
                    'image_url' => '23-55-51_rotimenu4.jpg',
                    'detail' => 'Grilled chicken',
                    'price' => 55,
                ],
                [   
                    'name' => 'Gyro night',               
                    'image_url' => '23-56-45_rotimenu5.png',
                    'detail' => 'Traditional chicken gyro',
                    'price' => 55,
                ],
                [   
                    'name' => 'Beef and lamb shawarma warps',               
                    'image_url' => '23-57-49_rotimenu6.jpg',
                    'detail' => 'Beef and lamb',
                    'price' => 65,
                ],
                [   'name' => 'Beef donair',               
                    'image_url' => '23-59-56_rotimenu7.jpg',
                    'detail' => 'Beef',
                    'price' => 55,
                ],
                [   
                    'name' => 'Chicken donair',               
                    'image_url' => '00-01-11_rotimenu8.jpg',
                    'detail' => 'Chicken',
                    'price' => 55,
                ],
                [   
                    'name' => 'Falafel donair',               
                    'image_url' => '00-02-00_rotimenu9.jpg',
                    'detail' => 'Vegan',
                    'price' => 55,
                ],
                [   
                    'name' => 'Kids beef donair',               
                    'image_url' => '00-02-40_rotimenu10.jpeg',
                    'detail' => 'No veggie toppings',
                    'price' => 55,
                ],
                [
                    'name' => 'Mixed donair',               
                    'image_url' => '00-03-16_rotimenu11.jpg',
                    'detail' => 'All meat and all toppings',
                    'price' => 65,
                ],
            )
        );
    }
}
