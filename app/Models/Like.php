<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'photos_id',
        'users_id'
    ];

    public function postLiked()
    {
        return $this->belongsTo(Photo::class, 'photos_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public static function isLiked($postId, $userId)
    {
        return self::where('photos_id', $postId)
            ->where('users_id', $userId)
            ->exists();
    }
}
