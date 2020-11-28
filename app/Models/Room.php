<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

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
}
