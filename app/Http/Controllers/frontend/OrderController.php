<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware("role: user");
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $orders = Order::where("user_id", $user_id)->get();
        return view("frontend.profile.orders", compact($orders));
    }

    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $products = $request->has("products");

        return view("frontend.profile.orders");
    }
}
