<?php

use Faker\Generator as Faker;

$factory->define(App\Ataglance::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'mobile' => $faker->numberBetween($min = 0, $max = 2147483647),
        'designation' => $faker->jobTitle,
        'image' => $faker->image('public/uploads/ataglance/',400,300, null, false) 
        
    ];
});
