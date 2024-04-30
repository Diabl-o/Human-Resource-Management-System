<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * @var string[]
     */
    protected $fillable = [
        
        'email',
        'password',
        'phone1',
        'first_name',
        'last_name',
        'date_of_birth',
        
        'phone2',
        'blood_group_id',
        'health_condition',
        'position_id',
        'image_blob',
        'image_type',
        
        

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        
    ];

    public function position()
    {
        return $this->belongsTo(Position::class,'position_id');
    }

    public function blood_group()
    {
        return $this->belongsTo(Blood_group::class,'blood_group_id');
    }


    public function permanentAddress()
    {
        return $this->hasOne(Address::class, 'u_id')->where('type', 'permanent');
    }

    public function temporaryAddress()
    {
        return $this->hasOne(Address::class, 'u_id')->where('type', 'temporary');
    }

    public function emergencyContact()
    {
        return $this->hasOne(Emergency_contact::class, 'u_id');
    }

    public function bankDetail()
    {
        return $this->hasOne(Bank_detail::class, 'u_id');
    }


    
}
