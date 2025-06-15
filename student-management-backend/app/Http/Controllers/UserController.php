<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'student_id' => 'nullable|exists:students,id',
        'NIM' => ['nullable', 'string', Rule::unique('users')->where(function ($query) use ($request) {
            return $query->where('student_id', $request->student_id);
        })],
    ]);

    $validated['password'] = Hash::make($validated['password']);

    try {
        $user = User::create($validated);
        // Generate and save api_key after creation
        $user->generateApiKey();
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Error creating user',
            'error' => $e->getMessage()
        ], 500);
    }

    return response()->json([
        'message' => 'User created successfully',
        'data' => $user
    ], 201);
    
}
    public function login(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $validated['email'])->first();

    if (!$user || !Hash::check($validated['password'], $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // Optionally, you can return the user data or a token
    return response()->json(['message' => 'Login successful', 'data' => $user]);
}
 public function logout(Request $request){
    
 }
}