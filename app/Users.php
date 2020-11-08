<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillabe = ['usertype', 'neptun', 'name', 'email', 'password', 'remember_token'];
}
