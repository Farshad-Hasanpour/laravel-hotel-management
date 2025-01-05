<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['firstname', 'lastname'];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'guest_room');
    }
}
