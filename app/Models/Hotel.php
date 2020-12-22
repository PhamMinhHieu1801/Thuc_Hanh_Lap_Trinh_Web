<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'hotels';
    protected $fillable = [
        'id', 'name', 'local', 'description', 'rating', 'breakfast', 'wifi', 'car_park'
    ];
}
