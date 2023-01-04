<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myOrdert extends Model
{
    use HasFactory;
    protected $fillable=['orderDate','paymentStatus','userID','amount'];

    public function user(){
        return $this->belongTo('App\Models\User');
    }
    public function payment(){
        return $this->hasOne('App\Models\payment');
    }
}

