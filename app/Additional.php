<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'additionable_id' => 'integer',
        'value_int' => 'integer',
    ];
}
