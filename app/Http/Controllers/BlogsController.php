<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogsController extends Controller
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

   
    

    public function index()
    {
        $blogs = Blogs::orderBy('updated_at', 'desc')->get();
        return view('dashboard.blogs.index')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function store(Request $request )
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'text' => 'required',
            'file' => 'required|mimes:jpeg,jpg,png,webp,svg',
        ]);
        
        
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Enter all fields.');
        }

        if ($request->hasFile('file')) {
            //Filename 
            $filename = $request->input('title');
 
            //Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('blogs' , $filenameToStore);
            
            
            $blog = new Blogs();
            $blog->title = $request->input('title');
            $blog->user_id = auth()->user()->id;
            $blog->author_name = auth()->user()->name;
            $blog->text = $request->input('text');
            $blog->image_url = $filenameToStore;
            $blog->save();
 
            return redirect()->route('dashboard.blogs.create')->with('success', 'Data saved.');
            
         }else{
            
             return redirect()->route('dashboard.blogs.create')->with('error', 'Attach an image.');
         }  
    }

    public function edit($id)
    {
        $blog = Blogs::find($id);
        return view('dashboard.blogs.edit')->with('blog', $blog);
        
    }

    public function delete($id)
    {
        $blog = Blogs::find($id);
        $blog->delete();
        return redirect()->route('dashboard.blogs.index')->with('success', 'Blog deleted successfully.');
        
    }

    public function update(Request $request, $id )
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'text' => 'required',
            'file' => 'nullable|mimes:jpeg,jpg,png,webp,svg',
        ]);
        
        
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Enter all fields.');
        }

        $blog = Blogs::find($id);

        if ($request->hasFile('file')) {
            //Filename 
            $filename = $request->input('title');
 
            //Extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('blogs' , $filenameToStore);
            
            
           
            $blog->title = $request->input('title');
            $blog->user_id = auth()->user()->id;
            $blog->author_name = auth()->user()->name;
            $blog->text = $request->input('text');
            $blog->image_url = $filenameToStore;
            $blog->save();
 
            return redirect()->route('dashboard.blogs.index')->with('success', 'Data updated.');
            
         }else{
            $blog->title = $request->input('title');
            $blog->user_id = auth()->user()->id;
            $blog->author_name = auth()->user()->name;
            $blog->text = $request->input('text');
            $blog->image_url =  $blog->image_url;
             return redirect()->route('dashboard.blogs.index')->with('success', 'Data updated.');
         }  
    }
}
