<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_report extends Model
{
    use HasFactory;
    protected $table = 'account_reports';
    protected $fillable = [
        'reported_users_id',
        'reporter_id',
        'reason'
    ];

    public function reportedUser()
    {
        return $this->belongsTo(User::class, 'reported_users_id', 'id');
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id', 'id');
    }
}
