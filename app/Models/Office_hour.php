<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office_hour extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['u_id','day_of_week', 'start_time', 'end_time','closed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    





}
