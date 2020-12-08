<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * user role_id = 10 =>admin
     */

    public function is_admin()
    {
        if ($this->role_id == 1) {
            return true;
        }
        return false;
    }


    public function userPackages()
    {
        return $this->hasMany('App\userPackage');
    }

    public function packages()
    {
        return $this->belongsToMany('App\Package');
    }

    public function invoices()
    {
        return $this->belongsToMany('App\Invoice');
    }

    public function avatar_or_default()
    {
        // 0 -> save, 1 -> active, 5 -> ended, 7 -> problem
        $avatar = $this->avatar;
        if ($avatar && $avatar != null && $avatar != '') {
            return $avatar;
        }
        return '/img/avatars/user-placeholder.jpg';
    }
}
