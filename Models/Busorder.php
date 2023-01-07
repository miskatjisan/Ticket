<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busorder extends Model
{
    use HasFactory;
    protected $fillable = ['useremail','name', 'email','date', 'phone','from', 'to','price','seat'];
}
