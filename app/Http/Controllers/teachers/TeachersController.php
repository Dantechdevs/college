<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //display all teachers
    public function index()
    {
        return view('teachers.index');
    }

    //create  teachers view
    public function create()
    {
        return view('teachers.create');
    }

    //Store  teachers in database
    public function store()
    {
    }

    //show  teacher information
    public function show()
    {
        return view('teachers.show');
    }
    //Edit teacher page
    public function edit()
    {
        return view('teachers.edit');
    }
    //display all teachers
    public function update()
    {
    }

    //Delete teachers
    public function destroy()
    {
        return view('teachers.index');
    }
    //Search teachers
    public function searchTeacher()
    {
        return view('teachers.search');
    }
}
