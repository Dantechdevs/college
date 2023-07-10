<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeachersFormRequest;
use App\Models\teachers\Teacher;
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
    public function store(TeachersFormRequest $request)
    {
        $request->validated();
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('teachers'), $image);
        Teacher::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'middleName'=>$request->middleName,
            'teacherId'=>$request->teacherId,
            'courses_id'=>$request->courses_id,
            'image_url'=>$image,
        ]);
        return redirect(route('teachers.index'))->with('success','Student created successfully');
    }

    //show  teacher information
    public function show($id)
    {
        $teacher=Teacher::findOrFail($id);
        return view('teachers.show',[
            'teacher'=>$teacher,
        ]);
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
    public function update(TeachersFormRequest $request , $id)
    {
        $request->validated();
        $teacher=Teacher::findOrFail($id);
        $image = $teacher->image;
       $teacher->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'middleName'=>$request->middleName,
            'teacherId'=>$request->teacherId,
            'courses_id'=>$request->courses_id,
            'image_url'=>$image,
        ]);
        return redirect(route('teachers.index'))->with('success','Student created successfully'); 
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
