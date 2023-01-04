<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tng extends Model
{
    use HasFactory;
    protected $fillable=['image','userID','amount','time','date','from','to','busNo','driver'];
}
