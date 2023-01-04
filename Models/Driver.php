<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable=['name','address','age','busId'];
    
    public function bus(){
        return $this->hasOne('App\Models\Bus');
    }
}
