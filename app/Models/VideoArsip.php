<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoArsip extends Model
{
    protected $table = 'video_arsips';

    protected $fillable = [
        'judul',
        'nama_file',
        'path',
        'deskripsi',
        'caption',
    ];
}