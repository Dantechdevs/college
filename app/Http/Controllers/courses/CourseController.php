<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    //display all courses
    public function index()
    {
        return view('courses.index');
    }

    //create  courses view
    public function create()
    {
        return view('courses.create');
    }

    //Store  courses in database
    public function store()
    {
    }

    //show courses information
    public function show()
    {
        return view('courses.show');
    }
    //Editcourses page
    public function edit()
    {
        return view('courses.edit');
    }
    //display all courses
    public function update()
    {
    }

    //Delete courses
    public function destroy()
    {
        return view('courses.index');
    }
    //Search courses
    public function searchTeacher()
    {
        return view('courses.search');
    }
}
