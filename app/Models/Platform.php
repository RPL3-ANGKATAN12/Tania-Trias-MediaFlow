<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $table = 'platform';

    public $timestamps = false;

    public function konten()
    {
        return $this->hasMany(Konten::class, 'platform_id');
    }
}