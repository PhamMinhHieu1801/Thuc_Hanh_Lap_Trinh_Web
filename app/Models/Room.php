<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\FeedBack;
use App\Models\BookingHistory;
use Illuminate\Support\Facades\Auth;

class Room extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'rooms';
    protected $fillable = [
        'id', 'hotel_id', 'name', 'price', 'description', 'status', 'type', 'bath', 'bed', 'tv', 'wardrobe','image'
    ];

    public function hotels()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function getHotelNameAttribute()
    {
        $hotel =  $this->hotels();
        return $hotel;
    }

    public function booking_historys()
    {
        return $this->hasMany(BookingHistory::class,'room_id');
    }
    public function getRoomBookedAttribute()
    {
        return $this->booking_historys()->where('user_id', Auth::id())->exists();
    }

    static public function getRoomById($id) {
        return self::find($id);
    }
}
