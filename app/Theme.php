<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    public function booth()
    {
        return $this->hasMany('App\Booth');
    }
}
