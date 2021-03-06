<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BookingHistory;
use App\Models\FeedBack;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE = [
        'user' => 0,
        'admin' => 1,
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'fullname', 'email', 'password', 'identity_card', 'phone', 'role'
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

    public function role(){
        return $this->role;
    }

    public function booking_historys()
    {
        return $this->hasMany(BookingHistory::class,'user_id');
    }

    public function feed_backs()
    {
        return $this->hasMany(FeedBack::class,'user_id');
    }
    static public function getUserById($id) {
        return self::find($id);
    }
}
