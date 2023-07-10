<?php

namespace App\Http\Controllers\teachers;

use Illuminate\Http\Request;
use App\Models\teachers\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherFormRequest;

class TeachersController extends Controller
{
    //display all teachers
    public function index()
    {
        $teachers=Teacher::latest()->paginate(10);
        return view('teachers.index',['teachers'=>$teachers,]);
    }

    //create  teachers view
    public function create()
    {
        return view('teachers.create');
    }

    //Store  teachers in database
    public function store(TeacherFormRequest $request)
    {
    }

    //show  teacher information
    public function show()
    {
        return view('teachers.show');
    }
    //Edit teacher page
    public function edit($id)
    {
        $teacher=Teacher::findOrFail($id);
        return view('teachers.edit',[
            'teacher'=>$teacher,
        ]);
    }
    //display all teachers
    public function update()
    {
    }

    //Delete teachers
    public function destroy($id)
    {

        $teacher=Teacher::findOrFail($id);
        return view('teachers.index')->with('danger','Teacher Deleted successfully');
    }
    //Search teachers
    public function searchTeacher()
    {
        return view('teachers.search');
    }
}
