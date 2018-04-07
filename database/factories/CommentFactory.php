<?php

use App\Entities\Comment;
use App\Entities\Post;
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

$factory->define(Comment::class, function (Faker $faker) {

    return [
        'post_id' => 1,
        'user_id' => 1,
        'author' => $faker->name,
        'email' => $faker->email,
        'url' => $faker->url,
        'ip' => $faker->ipv4,
        'content' => $faker->text,
        'approved' => true,
        'agent' => $faker->word,
        'parent' => 0,
    ];
});