<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movieorder extends Model
{
    use HasFactory;
    protected $fillable = ['useremail','name', 'email','date', 'phone','cineplex','price','seat'];
}
