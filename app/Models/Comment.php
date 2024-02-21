<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'photos_id',
        'users_id',
        'comment_fill'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photos_id', 'id');
    }
}
