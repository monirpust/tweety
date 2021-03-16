<?php

namespace App;

use App\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','avatar', 'name', 'email', 'password',
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

    public function getAvatarAttribute($value)
    {
        return asset('storage/'.$value);
    }

    public function timeline(){
        //include all of this user tweet
        //and tweets of everyone they follow

        $friends = $this->follows()->pluck('id');

        //in descending order
        return Tweet::whereIn('user_id', $friends)
                ->orWhere('user_id', $this->id)
                ->latest()
                ->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function path($append="")
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

}
