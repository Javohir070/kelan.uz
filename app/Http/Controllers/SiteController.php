<?php

namespace App\Http\Controllers;

use App\Models\Korousel;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $karousel = Korousel::first()->get();
        return view("frontend.home",["karousel"=> $karousel]);
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
