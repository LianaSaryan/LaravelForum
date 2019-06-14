<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

	$comment_belongs_to = random_int(\DB::table('posts')->min('id'), \DB::table('posts')->max('id'));

    return [
        'body' => $faker->paragraph(),
        'owner_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id')),
        'comment_belongs_to' => $comment_belongs_to,
        'post_id' => $comment_belongs_to
    ];
});
