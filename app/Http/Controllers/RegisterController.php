<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(Request $request){
        return view("auth.register");
    }
    public function store(Request $request){
         $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if (!auth()->attempt($request->only("email", 'password'), $request->remember)) {
            return back()->with("status", "Invalid credentials!");
        }
        return redirect()->route("dashboard");
    }
}
