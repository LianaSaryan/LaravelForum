<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(),
        'owner_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
    ];
});
