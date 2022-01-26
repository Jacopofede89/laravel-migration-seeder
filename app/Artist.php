<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        
        'name', 
            
        'surname',
        
        'number_of_albums', 

        'date_of_birth', 

        'phone', 

        'email', 

        'discography',

        'description'
    ];
}
