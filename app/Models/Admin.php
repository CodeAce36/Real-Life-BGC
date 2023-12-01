<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // ...
    
    protected $guard = 'admins'; // Specify the guard for this model

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'admins';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // You might also define relationships or custom methods relevant to your application
}


