<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public $table = "users";
    protected $fillable=['name','email', 'password'];

}
