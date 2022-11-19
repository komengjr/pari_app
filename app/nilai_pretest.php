<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_pretest extends Model
{
    protected $table = 'nilai_pretest';
    protected $fillable = ['kode_ujian','id_webinar', 'email', 'nilai'];
}
