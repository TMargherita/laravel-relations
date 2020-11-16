<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['author'];
    
    public function info()
    {
        return $this->hasOne('App\AuthorInfo');
    }

    public function comics()
    {
        return $this->hasMany('App\Comic');
    }
}