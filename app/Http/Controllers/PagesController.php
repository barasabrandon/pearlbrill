<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blogs;
use App\Models\Categories;
use App\Models\KeyPerformanceIndicator;
use App\Models\Samples;
use App\Models\Testimonials;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    // HOME
    public function home()
    {
        $performance_indicator = KeyPerformanceIndicator::first();
        $testmonials = Testimonials::orderBy('created_at', 'desc')->get();
        $categories = Categories::orderBy('created_at', 'desc')->get();
        return view('front.welcome')->with([
            'performance_indicator' => $performance_indicator,
            'testmonials' => $testmonials,
            'categories' => $categories,
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


    //BLOG
    public function blogs()
    {
        $blogs = Blogs::orderBy('updated_at', 'desc')->get();
        return view('front.blogs.index')->with('blogs', $blogs);
    }

    public function blog($id)
    {
        $blog = Blogs::find($id);        
        return view('front.blogs.blog')->with('blog', $blog);
    }

    //SAMPLES
    public function samples()
    {
        $samples = Samples::orderBy('updated_at', 'desc')->get();
        return view('front.samples.index')->with('samples', $samples);
    }

    public function sample($id)
    {
        $sample = Samples::find($id);        
        return view('front.samples.sample')->with('sample', $sample);
    }
}
