<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorInfo extends Model
{
    protected $table = "authors_info";
    public $timestamps = false;

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}