<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMail extends Model
{
    protected $table = 'adminmail';
    protected $fillable = ['user','onderwerp','message'];
}
