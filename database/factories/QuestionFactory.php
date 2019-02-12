<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' 	=> rtrim($faker->sentence(rand(5, 10)), "."),
        'body'		=> $faker->paragraphs(rand(3, 7), true), //the second arguement in paragraph 'true' makes the result a string istead inside an array
        'views'		=> rand(0, 10),
        'answers'	=> rand(0, 10),
        'votes'		=> rand(-3, 10)
    ];
});
