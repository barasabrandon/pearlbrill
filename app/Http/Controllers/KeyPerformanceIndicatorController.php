<?php

namespace App\Http\Controllers;

use App\Models\KeyPerformanceIndicator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KeyPerformanceIndicatorController extends Controller
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
        return view('dashboard.performanceindicator.create');
    }
        
    public function edit($id)
    {
        $item = KeyPerformanceIndicator::find($id);
        return view('dashboard.performanceindicator.edit')->with('item', $item);
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

        $item = new KeyPerformanceIndicator();
        $item->title = $request->input('title');
        $item->text = $request->input('text');
        $result = $item->save();

        if ($result) {
            return redirect()->route('home.page')->with('success', "Text created successfully.");
        } else {
            return redirect()->back()->with('error', 'An error occured in saving the data try again letter.');
        }        
    }

    public function update(Request $request, $id)
    {
        
        $item = KeyPerformanceIndicator::find($id);
       
        $item->title = $request->input('title');
        $item->text = $request->input('text');
        $item->save();
        
        return redirect()->route('home.page')->with('success', 'Text Updated successfully.');
    }
}
