<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airorder extends Model
{
    use HasFactory;
    protected $fillable = ['useremail','name','email','phone','vat','from','to','departure','return','price','seat'];
}
