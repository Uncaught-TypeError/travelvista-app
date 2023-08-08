<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'destination',
        'package_id',
    ];
}
