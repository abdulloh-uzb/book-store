<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("frontend.pages.home");
    }

    public function about()
    {
        return view("frontend.pages.about");
    }

    public function contact()
    {
        return view("frontend.pages.contact");
    }

}
