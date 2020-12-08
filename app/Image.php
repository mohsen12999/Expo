<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function booth()
    {
        return $this->belongsTo('App\Booth');
    }
}
