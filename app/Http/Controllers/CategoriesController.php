<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('updated_at', 'desc')->get();
        return view('dashboard.our_categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('dashboard.our_categories.create');
    }

    public function store(Request $request)
    {
        $testmonial = new Categories();
        if ($request->hasFile('file')) {
           //Filename 
           $filename = $request->input('title');

           //Extension
           $extension = $request->file('file')->getClientOriginalExtension();
           //Filename to store
           $filenameToStore = $filename.'_'.time().'.'.$extension;
           $request->file('file')->storeAs('our_categories' , $filenameToStore);
           
           $testmonial->title = $request->input('title');
           $testmonial->img_url = $filenameToStore;
           $testmonial->text = $request->input('text');
           $testmonial->save();

           return redirect()->route('categories.index')->with('success', 'Data saved.');
           
        }else{
          
            return redirect()->back()->with('error', 'Image field should not be empty.');
        }
       
    }

    public function edit($id)
    {
        $item = Categories::find($id);
        return view('dashboard.our_categories.edit')->with('item', $item);
    }

    public function updateTestimonial(Request $request, $id)
    {
        $testmonial = Categories::find($id);
        if ($request->hasFile('file')) {
           //Filename 
           $filename = $request->input('title');

           //Extension
           $extension = $request->file('file')->getClientOriginalExtension();
           //Filename to store
           $filenameToStore = $filename.'_'.time().'.'.$extension;
           $request->file('file')->storeAs('our_categories' , $filenameToStore);
           
           $testmonial->title = $request->input('title');
           $testmonial->img_url = $filenameToStore;
           $testmonial->text = $request->input('text');
           $testmonial->text = $request->input('text');
           $testmonial->save();

           return redirect()->route('categories.index')->with('success', 'Data updated successfully.');
           
        }else{
            return redirect()->route('categories.index')->with('error', 'Image field should not be empty.');
        }
       
    }

    public function deleteTestimonial($id)
    {
        $testmonial = Categories::find($id);
        $testmonial->delete();
        
        return redirect()->route('categories.index')->with('success', 'Data deleted successfully.');
    }
}
