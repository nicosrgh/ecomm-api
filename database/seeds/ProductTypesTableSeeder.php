<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::table('product_types')->delete();
        DB::table('product_types')
            ->insert([
                         [
                             'id' => 1,
                             'name' => 'Handphone',
                             'image_url' => 'https://dummyimage.com/300x300/000/fff',
                             'created_at' => $date,
                             'updated_at' => $date,
                             'deleted_at' => null
                         ],
                         [
                             'id' => 2,
                             'name' => 'Headset',
                             'image_url' => 'https://dummyimage.com/300x300/000/fff',
                             'created_at' => $date,
                             'updated_at' => $date,
                             'deleted_at' => null
                         ],
                         [
                             'id' => 3,
                             'name' => 'Sepatu',
                             'image_url' => 'https://dummyimage.com/300x300/000/fff',
                             'created_at' => $date,
                             'updated_at' => $date,
                             'deleted_at' => null
                         ],
                         [
                             'id' => 4,
                             'name' => 'Laptop',
                             'image_url' => 'https://dummyimage.com/300x300/000/fff',
                             'created_at' => $date,
                             'updated_at' => $date,
                             'deleted_at' => null
                         ],
                         [
                             'id' => 5,
                             'name' => 'Dompet',
                             'image_url' => 'https://dummyimage.com/300x300/000/fff',
                             'created_at' => $date,
                             'updated_at' => $date,
                             'deleted_at' => null
                         ]
                     ]);
    }
}
