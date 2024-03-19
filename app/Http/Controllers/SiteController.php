<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view("frontend.home");
    }
    public function project()
    {
        return view("frontend.project");
    }
    public function about()
    {
        return view("frontend.about");
    }
    public function contact()
    {
        return view("frontend.contact");
    }
    public function service()
    {
        return view("frontend.service");
    }
}
