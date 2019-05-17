<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Films;
use Faker\Generator as Faker;

$factory->define(Films::class, function (Faker $faker) {
    return [
        'title'=> $faker->name,
        'description'=>$faker->text($maxNbChars=100),
        'year'=>$faker->year($max='now'),
        'created_at'=> date('Y-m-d H:m:s'),
        'updated_at'=>date('Y-m-d H:m:s')


    ];
});
