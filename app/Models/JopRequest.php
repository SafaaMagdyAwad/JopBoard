<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JopRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'jop_id',
        'employee_id',
        'status',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function jops(){
        return $this->belongsTo(Jop::class);
    }
}
