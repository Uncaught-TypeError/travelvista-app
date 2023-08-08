<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'reply',
        'sender_id',
        'tour_id',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
