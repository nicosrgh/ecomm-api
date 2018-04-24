<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Domain\Core\Model\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Domain\Core\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->colorName,
        'price' => $faker->numberBetween(20000, 10000000),
        'discount' => $faker->numberBetween(0, 100),
        'image_url' => $faker->imageUrl(300, 300, null, true, null, true)
    ];
});

$factory->define(\App\Domain\Core\Model\ProductType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image_url' => $faker->imageUrl(300, 300, null, true, null, true)
    ];
});

