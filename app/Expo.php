<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expo extends Model
{
    //

    protected $dates = [
        'start', 'end',
    ];

    public function category()
    {
        return $this->belongsTo('App\ExpoCategory');
    }

    public function booths()
    {
        return $this->hasMany('App\Booth');
    }

    public function expoComments()
    {
        return $this->hasMany('App\ExpoComment');
    }

    public function expoImages()
    {
        return $this->hasMany('App\ExpoImage');
    }
}
