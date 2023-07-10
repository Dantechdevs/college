<?php

namespace App\Models\teachers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'middleName',
        'teacherId',
        'courses_id',
        'image_url',

    ];
}
