<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function expos()
    {
        return $this->hasMany('App\Expo');
    }
}
