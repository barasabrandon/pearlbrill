<?php

namespace App\Http\Controllers;

use App\Models\Samples;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SamplesController extends Controller
{
    public function index()
    {
        $samples = Samples::orderBy('updated_at', 'desc')->get();
        return view('dashboard.samples.index')->with('samples', $samples);
    }

    public function create()
    {
        return view('dashboard.samples.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf, doc, docx',
        ]);
        
        
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Enter all fields.');
        }            
            
        $sample = new Samples();

        if ($request->hasFile('file')) {
            //Filename 
            $filename = $request->input('title');
 
            //Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('samples' , $filenameToStore);

            $sample->title = $request->input('title');
            $sample->user_id = auth()->user()->id;
            $sample->author_name = auth()->user()->name;
            $sample->description = $request->input('description');
            $sample->doc_url = $filenameToStore;
            $sample->save();
 
            return redirect()->route('dashboard.samples.create')->with('success', 'Data saved.');
            
         }else{

            $sample->title = $request->input('title');
            $sample->user_id = auth()->user()->id;
            $sample->author_name = auth()->user()->name;
            $sample->description = $request->input('description');
            $sample->save();
             return redirect()->route('dashboard.samples.create')->with('success', 'Data saved.');
         }  

        return view('dashboard.samples.create');
    }

    public function edit($id)
    {
        $sample = Samples::find($id);
        return view("dashboard.samples.edit")->with('sample', $sample);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf, doc, docx',
        ]);
        
        
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Enter all fields.');
        }            
            
        $sample = Samples::find($id);

        if ($request->hasFile('file')) {
            //Filename 
            $filename = $request->input('title');
 
            //Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('samples' , $filenameToStore);

            $sample->title = $request->input('title');
            $sample->user_id = auth()->user()->id;
            $sample->author_name = auth()->user()->name;
            $sample->description = $request->input('description');
            $sample->doc_url = $filenameToStore;
            $sample->save();
 
            return redirect()->route('dashboard.samples.index')->with('success', 'Data updated.');
            
         }else{

            $sample->title = $request->input('title');
            $sample->user_id = auth()->user()->id;
            $sample->author_name = auth()->user()->name;
            $sample->description = $request->input('description');
            $sample->save();
             return redirect()->route('dashboard.samples.index')->with('success', 'Data updated.');
         }  
    }

    public function delete($id)
    {
        $sample = Samples::find($id);
        $sample->delete();
        return redirect()->route('dashboard.samples.index')->with('success', 'Sample deleted.');

    }
}
