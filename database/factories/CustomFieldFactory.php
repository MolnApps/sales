<?php

use Faker\Generator as Faker;

$factory->define(App\CustomField::class, function (Faker $faker) {
	$word = $faker->word;
    return [
        'name' => lcfirst($word),
        'title' => ucfirst($word),
    ];
});
