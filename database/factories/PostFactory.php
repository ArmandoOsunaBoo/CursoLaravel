<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;
use  App\User;
$factory->define(Post::class, function (Faker $faker) {

  $total= User::count();

    return [
       "title"=>$faker->name,
       "content"=>$faker->text($maxNbChars= 30),
       "user_id"=> $faker->numberBetween(1,$total)
    ];
});
