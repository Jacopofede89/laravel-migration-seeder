<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence(),
            
        'week_position' => $faker -> numberBetween(0, 10),
        
        'entry_position' => $faker -> numberBetween(0, 100), 

        'peak_position' => $faker -> numberBetween(0, 100), 

        'total_weeks' => $faker -> numberBetween(0, 100), 

        'type_of_albums' => $faker -> text(300),

        'date_of_relese' => $faker -> date(),

        'entry_date'=> $faker -> date(),

        'description_song' => $faker -> text(300),
    ];
});
