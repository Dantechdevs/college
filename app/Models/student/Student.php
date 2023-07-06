<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

   protected $fillable = [
    'firstName',
    'lastName',
    'middleName',
    'studentId',
    'class',
    'gender',
    'year_joined',
    'image_url',
    'age',
   ];
}