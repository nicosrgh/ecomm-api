<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::table('products')->delete();
        DB::table('products')->insert([
                                          [
                                              'id' => 1,
                                              'name' => 'Adidas Adipure',
                                              'brand' => 'Adidas',
                                              'price' => 230000,
                                              'discount' => 0,
                                              'color' => 'Blue',
                                              'image_url' => 'https://dummyimage.com/600x400/000/fff'
                                          ],
                                          [
                                              'id' => 2,
                                              'name' => 'Walleto',
                                              'brand' => 'Planet Ocean',
                                              'price' => 120000,
                                              'discount' => 5,
                                              'color' => 'Brown',
                                              'image_url' => 'https://dummyimage.com/300x300/000/fff'
                                          ],
                                          [
                                              'id' => 3,
                                              'name' => 'Headset Samsung',
                                              'brand' => 'Samsung',
                                              'price' => 85000,
                                              'discount' => 5,
                                              'color' => 'White',
                                              'image_url' => 'https://dummyimage.com/300x300/000/fff'
                                          ],
                                          [
                                              'id' => 4,
                                              'name' => 'Macbook Pro',
                                              'brand' => 'Macbook',
                                              'price' => 15000000,
                                              'discount' => 5,
                                              'color' => 'Grey',
                                              'image_url' => 'https://dummyimage.com/300x300/000/fff'
                                          ]

                                      ]);
    }
}
