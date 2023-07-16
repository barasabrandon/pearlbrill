<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\KeyPerformanceIndicator;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    // HOME
    public function home()
    {
        $performance_indicator = KeyPerformanceIndicator::first();
        return view('front.welcome')->with([
            'performance_indicator' => $performance_indicator,
        ]);
    }

    // CONTACT
    public function contactIndex()
    {
        return view('front.contact.index');
    }
    
    // ABOUT
    public function about()
    {
        $item = AboutUs::first();
        return view('front.about.index')->with(['item' => $item]);
    }

    // TUTORING
    public function tutoring()
    {
        $item = Tutorial::first();
        return view('front.tutoring.index')->with('item', $item);
    }
}
