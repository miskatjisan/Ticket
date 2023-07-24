<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moviepayment extends Model
{
    use HasFactory;
    protected $fillable = ['useremail','name','email', 'address','city', 'state','zip','total','creditnumber','expmonth','expyear','cvv'];
}
