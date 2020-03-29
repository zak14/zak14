<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use App\User;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'album_name'=> $faker->name,
        'description'=>$faker->text(128),
        //'user_id' => User::first()->id,
        'user_id'=> User::inRandomOrder()->first()->id,
    ];
});
