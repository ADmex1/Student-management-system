<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty; 
class FacultyController extends Controller
{
    public function index(){
        return response()->json(['message' => 'List of faculty members', 'data' => Faculty::all()]);
        $faculty = Faculty::all();

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'required|email|unique:faculty,email',
        ]);

        // Create a new faculty member
        $faculty = Faculty::create($request->all());

        return response()->json(['message' => 'Faculty Added', 'data' => $faculty], 201);
    }
    public function viewperid(Request $request, $id){
        $faculty = Faculty::find($id);
        if (!$faculty) {
            return response()->json(['message' => 'Faculty member not found'], 404);
        }
        return response()->json(['message' => 'Faculty member details', 'data' => $faculty]);
    }
}
