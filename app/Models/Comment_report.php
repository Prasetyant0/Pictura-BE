<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_report extends Model
{
    use HasFactory;
    protected $table = 'comment_reports';
    protected $fillable = [
        'comments_id',
        'reporter_id',
        'reason'
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comments_id', 'id');
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id', 'id');
    }
}
