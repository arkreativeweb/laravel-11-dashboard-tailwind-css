<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'content',
        'image',
        'slug',
        'meta_deskripsi',
        'meta_keyword',
        'user_id',
    ];

    public function getPictureAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
