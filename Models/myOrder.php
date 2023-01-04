<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    use HasFactory;
    protected $fillable=['paymentStatus','userID','amount','time','date','from','to','busNo','driver'];

    public function user(){
        return $this->belongTo('App\Models\User');
    }
    public function payment(){
        return $this->hasOne('App\Models\payment');
    }
}
