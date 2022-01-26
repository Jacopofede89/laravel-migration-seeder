<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
            
        'title',
            
        'group_name', 

        'week_position',

        'number_of_albums',

        'date_of_relese',

        'entry_date',

        'description_album'
    ];
}
