<?php

use Faker\Generator as Faker;
use App\Entities\Post;

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

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->word;

    return [
        'user_id' => 1,
        'content' => $faker->text,
        'title' => $title,
        'excerpt' => $title,
        'status' => 'publish',
        'allow_comment' => true,
        'allow_ping' => true,
        'slug' => $title,
        'pinged' => '',
        'to_ping' => '',
        'parent' => 0,
        'url' => '',
        'menu_order' => 0,
        'type' => 'post',
        'mime' => $faker->mimeType,
        'comments_count' => 0,
    ];
});
