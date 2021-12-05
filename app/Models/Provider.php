<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = "providers";

    protected $fillabe = [
        'fname',
        'lname',
        'nationalcode',
        'sex',
        'birthday',
        'married',
        'tel',
        'user_id',
    ];
}
