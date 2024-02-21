<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'fullName',
        'email',
        'bio',
        'gender',
        'birthdate',
        'photo_profile',
        'account_status',
        'is_banned',
        'role',
        'ban_expiration_time',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class, 'users_id', 'id');
    }

    public function albums()
    {
        return $this->hasMany(Album::class, 'users_id', 'id');
    }

    public function follows()
    {
        return $this->hasMany(Follow::class, 'users_id', 'id');
    }

    public function accountReports()
    {
        return $this->hasMany(Account_report::class, 'reported_users_id', 'id');
    }

    public function commentReports()
    {
        return $this->hasMany(Comment_report::class, 'reporter_id', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}