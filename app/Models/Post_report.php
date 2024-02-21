<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_report extends Model
{
    use HasFactory;
    protected $table = 'post_reports';
    protected $fillable = [
        'photos_id',
        'reporter_id',
        'reason'
    ];

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photos_id', 'id');
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id', 'id');
    }
}
