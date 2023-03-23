<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $fillable = [
        'name',
        'email',
        'address',
        'mobile',
        'description',
        'country',
        'city',
        'password',
        'photo',
        'token',
    ];
}
