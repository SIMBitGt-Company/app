<?php

namespace MyApp;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    //

    //use Notifiable;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 
    ];

}
