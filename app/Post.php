<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'category',
        'photo_id',
        'title',
        'body'

    ];

}
