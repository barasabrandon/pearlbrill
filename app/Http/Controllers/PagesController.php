<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // CONTACT
    public function contactIndex()
    {
        return view('front.contact.index');
    }
    
    // ABOUT
    public function about()
    {
        return view('front.about.index');
    }

    // TUTORING
    public function tutoring()
    {
        return view('front.tutoring.index');
    }
}
