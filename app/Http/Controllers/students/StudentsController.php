<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //display all students
     public function index()
     {
         return view('students.index');
     }
 
     //create  students view
     public function create()
     {
         return view('students.create');
     }
 
     //Store  students in database
     public function store()
     {
     }
 
     //show students information
     public function show()
     {
         return view('students.show');
     }
     //Editstudents page
     public function edit()
     {
         return view('students.edit');
     }
     //display all students
     public function update()
     {
     }
 
     //Delete students
     public function destroy()
     {
         return view('students.index');
     }
     //Search students
     public function searchTeacher()
     {
         return view('students.search');
     }
}
