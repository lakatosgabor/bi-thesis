<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursName extends Model
{
    protected $table = 'cursname';
    protected $fillabe = ['name', 'cid'];
}
