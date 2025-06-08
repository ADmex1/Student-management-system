<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyProgram;

class StudyProgramsController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::all();
        return response()->json(['message' => 'List of study programs', 'data' => $studyPrograms]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:10|unique:studyprograms,code',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'required|email|unique:studyprograms,email',
            'website' => 'nullable|url',
            'faculty_id' => 'required|exists:faculty,id',
        ]);

        $studyProgram = StudyProgram::create($request->all());

        return response()->json(['message' => 'Study program created successfully', 'data' => $studyProgram], 201);
    }

    public function show(StudyProgram $studyProgram)
    {
        return response()->json(['message' => 'Study program details', 'data' => $studyProgram]);
    }
}
