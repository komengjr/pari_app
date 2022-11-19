<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email', 'nir', 'password', 'status', 'jk', 'gambar','remember_token'];
}
