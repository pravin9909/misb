<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Validation\Validator;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $course = Course::WhereNot('status','0')->get();
        return view('backend.course',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.add_course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $request->validate([
'category' => 'required',
'course' => 'required',
'fees' => 'required',
       ]);
       Course::create($request->all());
       return redirect()->to('/admin/course')->with('success','Course added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $course = Course::where('id',$id)->first();
       // dd($course);
        return view('backend.edit_course',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'category' => 'required',
            'course' => 'required',
            'fees' => 'required',
                   ]);
                   $course = Course::find($id);
                   $course->update($request->all());
                   return redirect()->to('/admin/course')->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Course::where('id',$id)->update(['status'=>'0']);
        return redirect()->to('/admin/course')->with('success','Course deleted successfully');
    }
}
