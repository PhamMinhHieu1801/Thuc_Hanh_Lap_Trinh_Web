<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'hotel_id', 'name', 'price', 'description', 'status', 'type', 'bath', 'bed', 'tv', 'wardrobe'
    ];
}
