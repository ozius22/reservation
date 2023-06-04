<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    function Roomtype() {
        return $this->belongsTo(RoomType::class, 'type_id_fk');
    }
    function Hotel() {
        return $this->belongsTo(Hotel::class, 'hotel_id_fk');
    }
}
