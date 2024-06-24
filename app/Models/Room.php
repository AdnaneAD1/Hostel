<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';
    protected $fillable = ['name', 'amount', 'description', 'main_image', 'facilities', 'images'];

    public function getFacilitiesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value, true);
    }
}
