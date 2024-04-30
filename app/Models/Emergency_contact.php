<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency_contact extends Model
{
    use HasFactory;



     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'u_id',
        'name',
        'relation',
        'phone',
        
        

    ];






    public function permanentAddress()
    {
        return $this->hasOne(Address::class, 'e_id')->where('type', 'permanent');
    }





}
