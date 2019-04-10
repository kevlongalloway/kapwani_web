<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3,true),
        'subtitle' =>$faker->sentence(6,true),
        'description' => $faker->sentences(2,true),
    ];
});
