<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table="contact_us";
    protected $fillable= [
        'username',
        'gender',
        'message',
        'class',
        'email',
    ];
    //protected $timestamps=false;
}
