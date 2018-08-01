<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function category(){
        //many posts belongs to one category so
        return $this->belongsTo('App\Category');
    }



}
