<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
   public function store(Request $request)
{
    $validated = $request->validate([
        'NIM' => 'required|string|unique:students,NIM',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'phone' => 'nullable|string',
        'place_of_origin' => 'nullable|string',
        'address' => 'nullable|string',
        'dob' => 'nullable|date',
        'highschool' => 'nullable|string',
        'studyprogram_id' => 'nullable|exists:studyprograms,id',
        'faculty_id' => 'nullable|exists:faculty,id',
    ]);

    if (isset($validated['dob'])) {
        $validated['date_of_birth'] = $validated['dob'];
        unset($validated['dob']);
    }

    try {
        $student = Student::create($validated);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Error creating student',
            'error' => $e->getMessage()
        ], 500);
    }

    return response()->json([
        'message' => 'Student created successfully',
        'data' => $student
    ], 201);
}

    public function viewperid(Request $request, $id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json(['message' => 'Student details', 'data' => $student]);
    }
}
