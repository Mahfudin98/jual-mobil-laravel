<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(CarBrand::class);
    }

    public function category()
    {
        return $this->belongsTo(CarCategory::class);
    }

    public function color()
    {
        return $this->belongsTo(CarColor::class);
    }

    public function image()
    {
        return $this->hasMany(CarImage::class);
    }
}
