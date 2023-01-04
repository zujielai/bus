<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=['name','userId'];
    
    public function schedule(){
        return $this->hasOne('App\Models\Schedule');
    }
    public function users(){
        return $this->hasOne('App\Models\Users');
    }
}
