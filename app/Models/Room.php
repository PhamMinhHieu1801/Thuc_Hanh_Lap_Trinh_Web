<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\FeedBack;
use App\Models\BookingHistory;

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
        'id', 'hotel_id', 'name', 'price', 'description', 'status', 'type', 'bath', 'bed', 'tv', 'wardrobe'
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
}
