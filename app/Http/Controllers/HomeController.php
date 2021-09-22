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
    public function portfolios_single()
    {
        return view('front.portfolio');
    }
    public function latest_news()
    {
        return view('front.latest-news');
    }

    public function terms_and_conditions()
    {
        return view('front.terms-and-conditions');
    }
    public function privacy_policy()
    {
        return view('front.privacy-policy');
    }
    public function copyright()
    {
        return view('front.copyright');
    }
    

    

    
    
}
