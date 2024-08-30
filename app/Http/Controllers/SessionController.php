<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        $remember = $request->has("remember");

        if (!Auth::attempt($credentials, $remember)) {
            throw ValidationException::withMessages([
                "email" => "those credentials does not match"
            ]);
        }

        $request->session()->regenerate();

        $user = User::where("email", $credentials['email'])->first();
        if ($user->hasRole(["admin", "seller"])) {
            return redirect()->route("book.index");
        }

        return redirect()->route("user.orders");

    }


    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("home");
    }
}
