<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    // protected $table = 'category';
    protected $fillable = [
        'c_image', 'c_name',
    ];
}
