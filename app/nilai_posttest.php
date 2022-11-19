<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_posttest extends Model
{
    protected $table = 'nilai_posttest';
    protected $fillable = ['kode_ujian','id_webinar', 'email', 'nilai'];
}
