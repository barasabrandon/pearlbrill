<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TestimonialsController extends Model
{
    use HasFactory;

    public function index()
    {
        $testimonials = Testimonials::orderBy('updated_at', 'desc')->get();
        return view('dashboard.testmonials.index')->with('testimonials', $testimonials);
    }

    public function create()
    {
        return view('dashboard.testmonials.create');
    }

    public function store(Request $request)
    {
        $testmonial = new Testimonials();
        if ($request->hasFile('file')) {
           //Filename 
           $filename = $request->input('author_name');

           //Extension
           $extension = $request->file('file')->getClientOriginalExtension();
           //Filename to store
           $filenameToStore = $filename.'_'.time().'.'.$extension;
           $request->file('file')->storeAs('testmonials' , $filenameToStore);
           
           $testmonial->author_name = $request->input('author_name');
           $testmonial->author_occupation = $request->input('author_occupation');
           $testmonial->author_avatar = $filenameToStore;
           $testmonial->text = $request->input('text');
           $testmonial->save();

           return redirect()->route('testmonials.create')->with('success', 'Data saved.');
           
        }else{
            $testmonial->author_name = $request->input('author_name');
            $testmonial->author_occupation = $request->input('author_occupation');
            $testmonial->text = $request->input('text');
            $testmonial->save();
            return redirect()->route('testmonials.create')->with('success', 'Data saved.');
        }
       
    }

    public function edit($id)
    {
        $item = Testimonials::find($id);
        return view('dashboard.testmonials.edit')->with('item', $item);
    }

    public function updateTestimonial(Request $request, $id)
    {
        $testmonial = Testimonials::find($id);
        if ($request->hasFile('file')) {
           //Filename 
           $filename = $request->input('author_name');

           //Extension
           $extension = $request->file('file')->getClientOriginalExtension();
           //Filename to store
           $filenameToStore = $filename.'_'.time().'.'.$extension;
           $request->file('file')->storeAs('testmonials' , $filenameToStore);
           
           $testmonial->author_name = $request->input('author_name');
           $testmonial->author_occupation = $request->input('author_occupation');
           $testmonial->author_avatar = $filenameToStore;
           $testmonial->text = $request->input('text');
           $testmonial->save();

           return redirect()->route('testmonials.create')->with('success', 'Data updated successfully.');
           
        }else{
            $testmonial->author_name = $request->input('author_name');
            $testmonial->author_occupation = $request->input('author_occupation');
            $testmonial->text = $request->input('text');
            $testmonial->save();
            return redirect()->route('testmonials.index')->with('success', 'Data updated successfully.');
        }
       
    }

    public function deleteTestimonial($id)
    {
        $testmonial = Testimonials::find($id);
        $testmonial->delete();
        
        return redirect()->route('testmonials.index')->with('success', 'Data deleted successfully.');
    }
}
