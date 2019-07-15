<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'phone-number', 'email', 'status', 'buyer','seller','transporter'];

}
