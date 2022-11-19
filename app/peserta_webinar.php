<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta_webinar extends Model
{
    protected $table = 'peserta_webinar';
    protected $fillable = ['id_peserta_webinar','email', 'status', 'bukti', 'no_registrasi'];
}
