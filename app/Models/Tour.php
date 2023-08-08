<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'tour_name',
        'destination',
        'duration',
        'description',
        'image',
        'price',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Define the 'deleting' event to delete associated bookings
        static::deleting(function (Tour $tour) {
            // Delete associated bookings
            $tour->bookings()->delete();
        });
    }

}
