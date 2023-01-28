<?php

namespace Domain\Shared\Models;

use Domain\Blogging\Models\Post;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes;
    use HasKey;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'first_name',
        'last_name',
        'email',
        'password',
        'theme',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Posts(){
        return $this->hasMany(Post::class);
    }
}
