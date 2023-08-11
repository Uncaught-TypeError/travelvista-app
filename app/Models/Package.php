<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_name',
        'description',
        'price',
        'date',
        'num_person',
        'destination',
        'duration',
        'image',
    ];

    public function previews()
    {
        return $this->hasMany(Preview::class);
    }

    public function packagebookings()
    {
        return $this->hasMany(PackageBooking::class);
    }
}
