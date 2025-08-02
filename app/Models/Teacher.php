<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Teacher extends Model
{
    use HasFactory;
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
