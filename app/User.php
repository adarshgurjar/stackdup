<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    //Users will have many questions, so a One to Many relation is defined here with method name as the questions(),
    // Prural since user will have many questions, and relationship as hasMany(), with class name Question as arguement,
    // Its inverse will be defined in the Question model (belongsTo method for that).

    public function questions() {
        return $this->hasMany('App/Question');
    }
}
