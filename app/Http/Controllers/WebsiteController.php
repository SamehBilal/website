<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function blog()
    {
        return view('website.blog');
    }

    public function blog_single()
    {
        return view('website.blog-single');
    }

    public function citizenship()
    {
        return view('website.citizenship');
    }

    public function citizenship_single()
    {
        return view('website.citizenship-single');
    }

    public function residency()
    {
        return view('website.residency');
    }

    public function residency_single()
    {
        return view('website.residency-single');
    }

    public function passports()
    {
        return view('website.passports');
    }

    public function passport_index()
    {
        return view('website.passport-index');
    }

    public function visa_requirements()
    {
        return view('website.visa-requirements');
    }

    public function free_consultation()
    {
        return view('website.free-consultation');
    }
}
