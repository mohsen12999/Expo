<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function type_string()
    {
        // 0 -> save, 1 -> active, 5 -> ended, 7 -> problem
        switch ($this->type) {
            case 0:
                return 'other';
            case 1:
                return 'technical';
            case 2:
                return 'financial';
            default:
                return '';
        }
    }

    public function status_string()
    {
        switch ($this->status) {
            case 0:
                return 'waiting for answer';
            case 1:
                return 'answered';
            case 2:
                return 'wait for new answer';
            case 3:
                return 'closed';
            default:
                return '';
        }
    }
}
