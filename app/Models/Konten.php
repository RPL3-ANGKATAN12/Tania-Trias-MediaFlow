<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model

{
    protected $table = 'konten';

    protected $fillable = [
    'judul',
    'jenis',
    'platform_id',
    'pic_id',
    'pic_nama',
    'tanggal_target',
    'status',
    ];

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'platform_id');
    }

    public function anggota()
    {
        return $this->belongsTo(AnggotaTim::class, 'pic_id');
    }

    public $timestamps = false;
}
