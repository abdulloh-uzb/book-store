<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create()
    {
        return view("auth.registration");
    }

    public function store(StoreUserRequest $request)
    {

        $validated = $request->validated();
        $user = User::create($validated);
        $user->assignRole(3);
        Auth::login($user);

        return redirect()->route("home");
    }
}
