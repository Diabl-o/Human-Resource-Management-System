<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_detail extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        
        'u_id',
        'bank_name',
        'account_name',
        'account_number',
        
        

    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
