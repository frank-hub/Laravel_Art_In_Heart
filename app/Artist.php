<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable =  [
        'artname',
        'sub_category',
        'desc',
        'price',
        'artImage',
    ];
}
