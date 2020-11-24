<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingInfor extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'date_in', 'date_out', 'children', 'alduts', 'local', 'memo', 'breakfast', 'wifi', 'car_park'
    ];
}
