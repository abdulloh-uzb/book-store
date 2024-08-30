<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showOrders()
    {
        $user = auth()->user();
        return view("frontend.profile.orders", compact("user"));
    }


    public function showSettings()
    {
        $user = auth()->user();
        return view("frontend.profile.update", compact("user"));
    }

    public function edit(StoreUserRequest $request)
    {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->update([$request->validated()]);
        return redirect()->route("orders");
    }

    public function delete()
    {
        $user = auth()->user()->id;
        $user->delete();
        return redirect()->route("home");
    }


}
