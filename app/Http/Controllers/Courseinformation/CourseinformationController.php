<?php

namespace App\Http\Controllers\Courseinformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseinformationController extends Controller
{
    //
    //display all coursesinfo
    public function index()
    {
        return view('coursesinfo.index');
    }

    //create  coursesinfo view
    public function create()
    {
        return view('coursesinfo.index');
    }

    //Store  coursesinfo in database
    public function store()
    {
    }

    //show coursesinfo information
    public function show()
    {
        return view('coursesinfo.show');
    }
    //Editcoursesinfo page
    public function edit()
    {
        return view('coursesinfo.edit');
    }
    //display all coursesinfo
    public function update()
    {
    }

    //Delete coursesinfo
    public function destroy()
    {
        return view('coursesinfo.index');
    }
    //Search coursesinfo
    public function searchTeacher()
    {
        return view('coursesinfo.search');
    }
}
