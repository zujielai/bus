<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable=['time','date','from','to','busNo','driver','type','duration','endTime','price','image'];
    
    public function booking(){
        return $this->hasMany('App\Models\Booking');
    }
}
