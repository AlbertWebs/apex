<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function contact_us()
    {
        return view('front.contact-us');
    }
    public function about_us()
    {
        return view('front.about');
    }

    public function company()
    {
        return view('front.company');
    }
    public function services()
    {
        return view('front.services');
    }
    public function services_single()
    {
        return view('front.service');
    }
    public function portfolios()
    {
        return view('front.portfolios');
    }
    
    

    
    

    
}
