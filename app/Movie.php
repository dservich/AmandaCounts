<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Movie extends Model
{
    protected $guarded = [];

    protected $casts = [
      'genre' => 'array'
    ];

}
