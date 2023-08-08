<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'tour_id',
        'date',
        'destination',
        'num_person',
    ];

    public function tours(){
        return $this->belongsTo(Tour::class);
    }
}
