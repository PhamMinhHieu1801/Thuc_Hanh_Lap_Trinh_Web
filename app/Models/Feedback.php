<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingHistory;
use App\Models\User;

class Feedback extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'feed_backs';
    protected $fillable = [
        'id', 'user_id', 'booking_id', 'date', 'description', 'rating'
    ];
    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function booking_historys()
    {
        return $this->belongsTo(BookingHistory::class,'booking_id');
    }

    public function getUserNameAttribute($id)
    {
        $user = User::findOrFail($id);
        return $user->name;
    }
 
}
