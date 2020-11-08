<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable=['neptun', 'title', 'description', 'file'];
}
