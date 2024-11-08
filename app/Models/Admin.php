<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'Admin';

    protected $fillable = [
        'fullname', 'username', 'email', 'password'
    ];
}
