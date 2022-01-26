<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker){
    
    return [
        'title' => $faker -> text(10),
            
        'group_name' => $faker -> text(10),

        'week_position' => $faker -> numberBetween(0, 100),

        'number_of_albums' => $faker -> numberBetween(0, 100),

        'date_of_relese' => $faker -> date(),

        'entry_date' => $faker -> date(),

        'description_album' => $faker -> text(300)
    ];
});
