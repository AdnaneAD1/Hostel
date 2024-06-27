<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $fillable = [
        'id',
        'check_in',
        'check_out',
        'email',
        'nom',
        'prenom',
        'tel',
        'adults',
        'children',
        'payment_method',
        'amount',
        'room_id',
    ];
}
