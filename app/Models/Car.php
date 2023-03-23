<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'category_id',
        'name',
        'model',
        'description',
        'price',
        'status',
        'image1',
        'image2',
        'image3',
    ];

    public function category(){

        return $this->belongsTo(Category::class, 'category_id');
    }
}
