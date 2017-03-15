<?php

namespace MyApp;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plate_number',
            'model',
            'color',
            'engine_serial',
            'km_mi',
            'brand',
    ];

}
