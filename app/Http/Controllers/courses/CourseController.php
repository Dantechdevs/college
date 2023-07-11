<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courses\Course;
use App\Http\Requests\CoursesFormRequest;
class CourseController extends Controller
{
    //

    //display all courses
    public function index()
    {
        $courses=Course::latest()->get();
       // dd($courses);
        return view('courses.index',[
            'courses'=>$courses,
        ]);
    }

    //create  courses view
    public function create()
    {
        return view('courses.create');
    }

    //Store  courses in database
    public function store(CoursesFormRequest $request)
    {
        $request->validated();
        Course::create([
            'name'=>$request->name,
            'grade'=>$request->grade,
            'credit'=>$request->credit,
            'courseId'=>$request->courseId,
        ]);
        return redirect(route('courses.index'))->with('success','Course created successfully');
    }

    //show courses information
    public function show()
    {
        return view('courses.show');
    }
    //Editcourses page
    public function edit($id)
    {
        $course=Course::findOrFail($id);
        return view('courses.edit',[
            'course'=>$course,
        ]);
    }
    //display all courses
    public function update(CoursesFormRequest $request,$id)
    {
        $request->validated();
        $course=Course::findOrFail($id);
        $course->update([
            'name'=>$request->name,
            'grade'=>$request->grade,
            'credit'=>$request->credit,
            'courseId'=>$request->courseId,
        ]);
        return redirect(route('courses.index'))->with('success','Course updated successfully');
    }

    //Delete courses
    public function destroy($id)
      
    {
          $courses=Course::findOrFail($id);
     $courses->delete();
       
        return redirect(route('courses.index'))->with('danger','Course deleted successfully');
    }
    //Search courses
    public function searchTeacher()
    {
        return view('courses.search');
    }
}
