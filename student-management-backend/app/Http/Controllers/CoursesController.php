<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses; 
class CoursesController extends Controller
{
    public function index(){
        return response()->json(['message' => 'List of courses', 'data' => Courses::all()]);
    }

    public function store(Request $request){
        $request->validate([
            'code' => 'required|string|max:10|unique:courses,code',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'semester' => 'required|integer|min:1|max:8',
            'credits' => 'required|integer|min:1|max:6',
            'studyprogram_id' => 'required|exists:studyprograms,id',
            'faculty_id' => 'required|exists:faculty,id',
        ]);

        // Create a new course
        $course = Courses::create($request->all());

        return response()->json(['message' => 'Course created successfully', 'data' => $course], 201);
    }

    public function viewperid(Request $request, $id)
    {
        $course = Courses::find($id);
        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        return response()->json(['message' => 'Course details', 'data' => $course]);
    }
}
