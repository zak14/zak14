<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use App\Album;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    $cats =
    [
        'abstract',
        'animals',
        'business',
        'cats',
        'city',
        'food',
        'nightlife',
        'fashion',
        'people',
        'nature',
        'sports',
        'technics',
        'transport',
    ];
    return [
        'name' => $faker->text(8),
        'description' => $faker->text(128),
        'img_path'=> $faker ->imageUrl(640,480,$faker->randomElement($cats)),
        'album_id' => Album::inRandomOrder()->first()->id,
    ];
});
