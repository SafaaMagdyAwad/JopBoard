<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'jop_id',
        'title',
        'content',
    ];

}
