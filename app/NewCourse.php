<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CursNameController;

class NewCourse extends Model
{
    public $table = "task";
    protected $fillabe = ['curs', 'text', 'file'];

}
