<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TutorialController extends Controller
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
        return view('dashboard.tutorial.create');
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

        $item = new Tutorial();
        $item->title = $request->input('title');
        $item->text = $request->input('text');
        $item->save();
        return redirect()->route('tutoring')->with('success', 'Tutoring added successfully.');
    }

    public function edit($id)
    {
        $item = Tutorial::find($id);
        return view('dashboard.tutorial.edit')->with('item', $item);
    }

    public function update(Request $request, $id)
    {
        
        $item = Tutorial::find($id);
       
        $item->title = $request->input('title');
        $item->text = $request->input('text');
        $item->save();
        
        return redirect()->route('tutoring')->with('success', 'Tutoring Updated successfully.');
    }

}
