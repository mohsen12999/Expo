<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExpoPackage extends Model
{
    //
    protected $dates = [
        'start', 'end',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function booth()
    {
        return $this->belongsTo('App\Booth');
    }

    public function package()
    {
        return $this->belongsTo('App\Package');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
