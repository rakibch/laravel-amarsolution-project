<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $student = Student::where('email', $request->email)->first();

        if (!$student || !Hash::check($request->password, $student->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $student->createToken('student-token', ['guard:student'])->plainTextToken;

        return response()->json([
            'user' => $student,
            'token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        auth('student')->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }

    public function me(Request $request)
    {
        return response()->json(auth('student')->user());
    }

}
