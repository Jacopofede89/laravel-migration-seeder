<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    
    return [
        'name' => $faker -> firstName(),
            
        'surname' => $faker -> lastName(),
        
        'number_of_albums' => $faker -> numberBetween(0, 100), 

        'date_of_birth' => $faker -> date(), 

        'phone' => $faker -> phoneNumber(), 

        'email' => $faker -> email(),

        'discography' => $faker -> text(),

        'description' => $faker -> text(300),
    ];
});
