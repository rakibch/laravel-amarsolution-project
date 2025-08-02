<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
class Teacher extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'name',
        'image',
        'email',
        'phone',
        'address',
        'dob',
        'password',
        'subject'
    ];
}
