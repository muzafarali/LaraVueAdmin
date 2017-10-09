<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Artesaos\Defender\Traits\HasDefender;


class User extends Authenticatable
{
    use Notifiable, HasDefender;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'status', 'avatar', 'password'
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
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
        
        return $this->email;
    }
    
    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        
        return $this->first_name . " " . $this->last_name;
    }
    
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }


}
