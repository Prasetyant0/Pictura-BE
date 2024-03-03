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

    const GENDER_MALE = 'Laki-laki';
    const GENDER_FEMALE = 'Perempuan';

    public static function getGenders()
    {
        return [
            self::GENDER_MALE => 'Male',
            self::GENDER_FEMALE => 'Female',
        ];
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isSuperAdmin()
    {
        return $this->role === 'superAdmin';
    }
    public function isUser()
    {
        return $this->role === 'user';
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'users_id', 'id');
    }

    public function albums()
    {
        return $this->hasMany(Album::class, 'users_id', 'id');
    }

    public function isFollowing($otherUser)
    {
        return $this->followers()->where('following_id', $otherUser)->exists();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_id', 'users_id')->withTimestamps();
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'users_id', 'following_id')->withTimestamps();
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

    public function userFavorites()
    {
        return $this->hasMany(Favorite::class, 'users_id', 'id');
    }
}
