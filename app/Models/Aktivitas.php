<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $table = 'aktivitas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'anggota_id',
        'konten_id',
        'tanggal',
        'deskripsi',
        'hasil',
        'week_timeline',
        'keterangan_pekerjaan',
        'kategori_target',
        'status',
        'validasi',
    ];

    public function anggota()
    {
        return $this->belongsTo(AnggotaTim::class, 'anggota_id');
    }
}