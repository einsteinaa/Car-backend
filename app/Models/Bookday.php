<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookday extends Model
{
    use HasFactory;
    protected $table = 'bookdays';
    protected $fillable=[
        'car_id',
        'day',
        'from',
        'to',
        'status',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function bookRequest(){
        return $this->hasOne(BookRequest::class);
    }
}
