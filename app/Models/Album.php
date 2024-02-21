<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'album_name',
        'album_description',
        'album_wallpaper',
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'albums_id', 'id');
    }
}
