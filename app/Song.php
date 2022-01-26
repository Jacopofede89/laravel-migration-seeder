<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        
        'title', 
            
        'week_position',
        
        'entry_position', 

        'peak_position', 

        'total_weeks', 

        'type_of_albums', 

        'date_of_relese',

        'entry_date',

        'description_song'
    ];

}
