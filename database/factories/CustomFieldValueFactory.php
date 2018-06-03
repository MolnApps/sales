<?php

use Faker\Generator as Faker;

$factory->define(App\CustomFieldValue::class, function (Faker $faker) {
	
	$customField = App\CustomField::find(1);

    return [
        'custom_field_id' => $customField->id,
        'value' => ucfirst($faker->word),
    ];
});
