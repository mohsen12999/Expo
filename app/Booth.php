<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booth extends Model
{
    //

    public function expo()
    {
        return $this->belongsTo('App\Expo');
    }

    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function status_string()
    {
        // 0 -> save, 1 -> active, 5 -> ended, 7 -> problem
        switch ($this->status) {
            case 0:
                return 'saved';
            case 1:
                return 'active';
            case 5:
                return 'ended';
            case 7:
                return 'problem';
            default:
                return '';
        }
    }
}
