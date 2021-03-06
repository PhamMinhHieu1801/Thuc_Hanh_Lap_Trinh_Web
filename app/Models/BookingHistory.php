<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\User;
use App\Models\FeedBack;

class BookingHistory extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "booking_historys";
    protected $fillable = [
        'id', 'room_id', 'user_id', 'check_in', 'check_out'
    ];

    public function rooms()
    {
        return $this->belongsMany(Room::class, 'room_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function feed_backs()
    {
        return $this->hasMany(FeedBack::class,'booking_id');
    }
    public function getFeedBackAttribute()
    {
        return $this->feed_backs();
    }
}
