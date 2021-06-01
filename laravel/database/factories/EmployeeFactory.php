<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    $gender = $faker -> randomElement(['male','female']);

    return [
        'firstname' => $faker -> firstName($gender),
        'lastname' => $faker -> lastName
    ];
});
