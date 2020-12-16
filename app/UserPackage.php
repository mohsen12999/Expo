<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    //
    protected $dates = [
        'start', 'end',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
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
