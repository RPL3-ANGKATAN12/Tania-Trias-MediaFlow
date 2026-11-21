<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaTim extends Model
{
    protected $table = 'anggota_tim';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'jabatan',
    ];

    public function konten()
    {
        return $this->hasMany(Konten::class, 'pic_id');
    }
}


