<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $guarded = ["genres"];
    
    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
}