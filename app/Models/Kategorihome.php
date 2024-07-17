<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorihome extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'image',
    ];

    public function getPictureAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
