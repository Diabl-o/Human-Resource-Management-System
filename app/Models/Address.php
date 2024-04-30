<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'u_id',
        'e_id',
        'district',
        'city',
        'tole',
        'ward_no',
        'zipcode',
        'zone',
        'type',
        

    ];
}
