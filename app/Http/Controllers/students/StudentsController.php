<?php

namespace App\Http\Controllers\students;

use Illuminate\Http\Request;
use App\Models\student\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentFormRequest;
use App\Http\Requests\StudentUpdateFormRequest;

class StudentsController extends Controller
{
    //display all students
     public function index()
     {
        $students=Student::latest()->paginate(10);
         return view('students.index',['students'=>$students]);
     }
 
     //create  students view
     public function create()
     {
         return view('students.create');
     }
 
     //Store  students in database
     public function store(StudentFormRequest $request)
     {
        $request->validated();
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('students'), $image);
        Student::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'middleName'=>$request->middleName,
            'studentId'=>$request->studentId,
            'class'=>$request->class,
            'gender'=>$request->gender,
            'year_joined'=>$request->year,
            'image_url'=>$image,
            'age'=>$request->age,
        ]);
        return redirect(route('students.index'))->with('success','Student created successfully');
     }
 
     //show students information
     public function show($id)
     {
         $student=Student::findOrFail($id);
         return view('students.show',[
            'student'=>$student,
         ]);
     }
     //Editstudents page
     public function edit($id)
     {
        $student=Student::findOrFail($id);
         return view('students.edit',[
            'student'=>$student,
         ]);
     }
     //display all students
     public function update(StudentUpdateFormRequest $request, $id)
     {
        $request->validated();
         $student=Student::findOrFail($id);
        if($request->has('image')){
            $image = time().'.'.$request->image->extension();
            $request->image->move(public_path('students'), $image);
        }else{
            $image=$student->image_url; 
        }
       
        $student->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'middleName'=>$request->middleName,
            'studentId'=>$request->studentId,
            'class'=>$request->class,
            'gender'=>$request->gender,
            'year_joined'=>$request->year,
            'image_url'=>$image,
            'age'=>$request->age,
        ]);
        return redirect(route('students.index'))->with('success','Student updated successfully');


     }
 
     //Delete students
     public function destroy($id)
     {
        $student=Student::findOrFail($id);
        $student->delete();
        return redirect(route('students.index'))->with('danger','Student Deted successfully');
     }
     //Search students
     public function searchTeacher()
     {
         return view('students.search');
     }
}
