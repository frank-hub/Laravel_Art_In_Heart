<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discovery extends Model
{
    protected $fillable =  [
        'artname',
        'sub_category',
        'desc',
        'price',
        'artImage',
    ];
}
