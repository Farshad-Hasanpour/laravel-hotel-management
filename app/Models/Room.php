<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_number', 'status'];
    public function guests()
    {
        return $this->belongsToMany(
            Guest::class,
            'guest_room',
            'room_id',
            'guest_id'
        )->withTimestamps();
    }
}
