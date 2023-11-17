<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'floor',
        'room_no',
        'room_type_id',
<<<<<<< HEAD
        'room_type_id',
        'description',
        'status',
        'status',
=======
        'description',
        'status',
>>>>>>> b3f2f5bcdaf46a8f2fab82e619e27f5d42c3ad9d
    ];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> b3f2f5bcdaf46a8f2fab82e619e27f5d42c3ad9d
