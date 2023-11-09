<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'total',
        'total_reserva',
        'hospede_name',
        'quarto_name',
        'check_in_date',
        'check_out_date',
        'status',
    ];
}
