<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'rule',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function admin(){
        if($this->rule === 'admin'){
            return true;
        }else{
            return false;   

        }
    }


    public function employee(){
        if($this->rule === 'employee'){
            return true;
        }else{
            return false;   
        }
    }

    
    public function seeker(){
        if($this->rule === 'seeker'){
            return true;
        }else{
            return false;   

        }
    }

    public function jops(){
        return $this->hasMany(Jop::class);
    }
    public function jopRequests(){
        return $this->hasMany(JopRequest::class);
    }
}
