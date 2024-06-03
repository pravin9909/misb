<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $table = 'contacts';
    public $timestamps = false;
    protected $fillable = ['name','email','phone_number','msg_subject','message'];
}
