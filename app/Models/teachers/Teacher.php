<?php

namespace App\Models\teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacherId',
        'firstName',
        'middleName',
        'lastName',
        'image_url',
        'courses_id',


    ];
}
