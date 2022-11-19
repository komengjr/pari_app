<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class webinar extends Model
{
    protected $table = 'webinar';
    protected $fillable = ['id_webinar','nama_webinar', 'tgl_webinar'];
}
