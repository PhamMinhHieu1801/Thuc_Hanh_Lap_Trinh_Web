<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BookingInfor extends Model
{
    
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'booking_infors';
    protected $fillable = [
        'id', 'user_id', 'date_in', 'date_out', 'children', 'alduts', 'local', 'memo', 'breakfast', 'wifi', 'car_park'
    ];
}
