<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('dashboard.about.create');
    }
        
    public function edit($id)
    {
        $item = AboutUs::find($id);
        return view('dashboard.about.edit')->with('item', $item);
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,[
            'title'=>'required',
            'text'=>'required',
        ]);  

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Enter all fields.');
        }

        $item = new AboutUs();
        $item->title = $request->input('title');
        $item->text = $request->input('text');
        $result = $item->save();

        if ($result) {
            return redirect()->route('about')->with('success', "About us created successfully.");
        } else {
            return redirect()->back()->with('error', 'An error occured in saving the data try again letter.');
        }        
    }

    public function update(Request $request, $id)
    {
        
        $item = AboutUs::find($id);
       
        $item->title = $request->input('title');
        $item->text = $request->input('text');
        $item->save();
        
        return redirect()->route('about')->with('success', 'About us Updated successfully.');
    }
}
