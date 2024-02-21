<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_title'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class, 'category_id', 'id');
    }
}