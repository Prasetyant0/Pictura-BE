<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'photo_title',
        'photo_description',
        'file_location',
        'tag_topic',
        'users_id',
        'albums_id',
        'category_id',
        'visibility'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = $model->uuid ?: Uuid::uuid4()->toString();
        });
    }

    protected $casts = [
        'tag_topic' => 'json',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    protected function setTagTopicAttribute($value)
    {
        $this->attributes['tag_topic'] = json_encode($value);
    }

    public function getTagTopicAttribute($value)
    {
        return json_decode($value, true);
    }

    public function userPhotos()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function album()
    {
        return $this->belongsTo(Album::class, 'albums_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function likedPhoto()
    {
        return $this->hasMany(Like::class, 'photos_id', 'id');
    }

    public function favoritePhotos()
    {
        return $this->hasMany(Favorite::class, 'photos_id', 'id');
    }
}
