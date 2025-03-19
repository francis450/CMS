<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        return view('welcome');
    }

    // About Page
    public function about()
    {
        return view('about');
    }

    // Services Page
    public function services()
    {
        return view('services');
    }

    // Features Page
    public function features()
    {
        return view('features');
    }

    // Quote Page
    public function quote()
    {
        return view('quote');
    }

    // Team Page
    public function team()
    {
        return view('team');
    }

    // Testimonial Page
    public function testimonial()
    {
        return view('testimonial');
    }

    // Contact Page
    public function contact()
    {
        return view('contact');
    }

    // 404 Page
    public function error404()
    {
        return view('404');
    }
}
