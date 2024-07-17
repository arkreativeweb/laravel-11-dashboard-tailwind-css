<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouthome extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'image',
        'button',

    ];

    public function getPictureAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
