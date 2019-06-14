<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text($maxNbChars = 200),
        'owner_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'comment_belongs_to' => random_int(\DB::table('posts')->min('id'), \DB::table('posts')->max('id')),
        'post_id' => random_int(\DB::table('posts')->min('id'), \DB::table('posts')->max('id')),
    ];
});
