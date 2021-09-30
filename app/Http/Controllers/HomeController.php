<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;
use DB;
use Newsletter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        SEOTools::setTitle('Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/');
        SEOTools::setCanonical('http://apexengltd.com/');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        return view('front.index');
    }
    public function contact_us()
    {
        SEOTools::setTitle('Contact Us | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/contact-us');
        SEOTools::setCanonical('http://apexengltd.com/contact-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Content = DB::table('_site_settings')->get();
        return view('front.contact-us',compact('Content'));
    }
    public function about_us()
    {
        SEOTools::setTitle('About Us | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/about-us');
        SEOTools::setCanonical('http://apexengltd.com/about-us');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Content = DB::table('abouts')->get();
        return view('front.about',compact('Content'));
    }

    public function company()
    {
        SEOTools::setTitle('The Company | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/the-company');
        SEOTools::setCanonical('http://apexengltd.com/the-company');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Content = DB::table('abouts')->get();
        return view('front.company',compact('Content'));
    }
    public function services()
    {
        SEOTools::setTitle('Our Services | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('Apex Engineering Limited Services');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/services');
        SEOTools::setCanonical('http://apexengltd.com/services');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Content = DB::table('categories')->get();
        return view('front.services',compact('Content'));
    }
    public function services_single($slung)
    {
        $Categories = DB::table('categories')->where('slung',$slung)->get();
        foreach($Categories as $Cat){
            $title = html_entity_decode($Cat->title, ENT_QUOTES, 'UTF-8');
            SEOTools::setTitle(''.$title.' | Apex Engineering Limited | Best Engineering Firm In Somalia');
            SEOTools::setDescription(''.$Cat->meta.'');
            SEOTools::opengraph()->setUrl('http://apexengltd.com/services/'.$slung.'');
            SEOTools::setCanonical('http://apexengltd.com/'.$slung.'');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@apexengineering');
            SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
            $Content = DB::table('categories')->get();
            return view('front.service',compact('Categories'));
        }
    }
    public function portfolios()
    {
        return view('front.portfolios');
    }
    public function portfolios_single($slung)
    {
        $Portfolio = DB::table('cases')->where('slung',$slung)->get();
        foreach($Portfolio as $Cat){
            $title = html_entity_decode($Cat->title, ENT_QUOTES, 'UTF-8');
            SEOTools::setTitle(''.$title.' | Apex Engineering Limited | Best Engineering Firm In Somalia');
            SEOTools::setDescription(''.$Cat->meta.'');
            SEOTools::opengraph()->setUrl('http://apexengltd.com/services/'.$slung.'');
            SEOTools::setCanonical('http://apexengltd.com/'.$slung.'');
            SEOTools::opengraph()->addProperty('type', 'articles');
            SEOTools::twitter()->setSite('@apexengineering');
            SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
            $Content = DB::table('categories')->get();
            return view('front.portfolio',compact('Portfolio'));
        }
        
    }
    public function latest_news()
    {
        SEOTools::setTitle('Latest News | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/latest-news');
        SEOTools::setCanonical('http://apexengltd.com/latest-news');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Blogs = DB::table('blogs')->paginate(12);
        return view('front.latest-news',compact('Blogs'));
    }

    public function terms_and_conditions()
    {
        SEOTools::setTitle('Terms and Conditions | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/terms-and-conditions');
        SEOTools::setCanonical('http://apexengltd.com/terms-and-conditions');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Copyright = DB::table('terms')->get();
        return view('front.terms-and-conditions',compact('Copyright'));
    }
    public function privacy_policy()
    {
        SEOTools::setTitle('Privacy Policy | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/privacy-policy');
        SEOTools::setCanonical('http://apexengltd.com/privacy-policy');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Copyright = DB::table('privacies')->get();
        return view('front.privacy-policy',compact('Copyright'));
    }
    public function copyright()
    {
        SEOTools::setTitle('Copyright | Apex Engineering Limited | Best Engineering Firm In Somalia');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://apexengltd.com/copyright');
        SEOTools::setCanonical('http://apexengltd.com/copyright');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@apexengineering');
        SEOTools::jsonLd()->addImage('https://www.apexengltd.com/wp-content/uploads/2017/10/Apex.png');
        $Copyright = DB::table('copyright')->get();
        return view('front.copyright',compact('Copyright'));
    }
    

    public function news_letters(Request $request)
    {   
       
          
            if ( ! Newsletter::isSubscribed($request->user_email) ) {
                Newsletter::subscribe($request->user_email);
            }
     

       
    }


    
    
}
