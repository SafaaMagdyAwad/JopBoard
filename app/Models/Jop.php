<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'salary',
        'requirements',
        'discription',
        'user_id',
        'location',
        'type',
        'company',
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function jopRequests(){
        return $this->hasMany(JopRequest::class);
    }

}
