<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'kategori',
        'image',
        'deskripsi',

    ];
    public function getPictureAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
