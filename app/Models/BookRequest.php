<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookday_id',
        'client_id',
        'reservation_date',
        'reservation_day',
        'status',
    ];
    public function client(){
        return $this->belongsTo(Client::class); 
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function bookday(){
        return $this->belongsTo(Bookday::class);
    }
    public function notification(){
        return $this->hasOne(Notification::class);
    }

}
