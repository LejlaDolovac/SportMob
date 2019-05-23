<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'category'
    ];
}



/*
// returns the sluggable configurator for this model  -hur viktig är denna ?

use Sluggable; 

@return // array

public function sluggable() {
       return[
           'slug' => [
               'source' => 'name'
           ]
      ];
}

*/
