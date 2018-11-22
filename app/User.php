<?php

namespace App;
use App\Model\Comment;
use App\Model\Event;
use App\Model\Post;
use App\Model\Role;
use App\Model\UserInfo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $primaryKey='id';
    protected $fillable = [
        'name', 'email', 'password','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function userinfos(){
        return $this->hasOne(UserInfo::class);
    }
    public function role(){
        return $this->hasMany(Role::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function event(){
        return $this->hasMany(Event::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function hasRole(){
        return $this->role;
    }
    public function name()
    {
        return $this->name;
    }
    public function status(){
        return $this->status;
    }
    public function category(){
        return $this->hasMany(Post::class);
    }
}
