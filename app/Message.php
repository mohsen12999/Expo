<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function sender()
    {
        return $this->belongsTo('App\User', 'sender_id');
    }
}
