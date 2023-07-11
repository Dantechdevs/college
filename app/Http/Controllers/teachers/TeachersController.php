<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherFormRequest;
use App\Models\teachers\Teacher;
use Illuminate\Http\Request;

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
    
        $request->validated();
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('teachers'), $image);
        Teacher::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'middleName'=>$request->middleName,
            'teacherId'=>$request->teacherId,
            'image_url'=>$image,
           'courses_id'=>1,
          
        ]);
        return redirect(route('teachers.index'))->with('success','Teacher created successfully');
    
    }

    //show  teacher information
    public function show($id)
    {   $teacher=Teacher::findOrfail($id);
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
    public function update(TeacherFormRequest $request, $id)
    {
        $request->validated();
       
        $teacher=Teacher::findOrFail($id);
        $image=$teacher->image;
       $teacher->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'middleName'=>$request->middleName,
            'teacherId'=>$request->teacherId,
            'image_url'=>$image,
           'courses_id'=>1,
          
        ]);
        return redirect(route('teachers.index'))->with('success','Teacher updated successfully');
    }

    //Delete teachers
    public function destroy($id)
    {
        $teacher=Teacher::findOrFail($id);
        $teacher->delete();
        return redirect(route('teachers.index'))->with('danger','Teacher  Deleted successfully');;
    }
    //Search teachers
    public function searchTeacher()
    {
        return view('teachers.search');
    }
}
