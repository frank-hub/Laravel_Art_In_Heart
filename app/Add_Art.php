<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_Art extends Model
{
    protected $fillable = [
        'name',
        'cartegory',
        'sub_cartegory',
        'desc',
        'price',
        'artImage',

    ];
}
