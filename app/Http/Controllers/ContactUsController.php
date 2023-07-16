<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
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
    
    public function getContacts()
    {
        $contacts = ContactUs::orderBy('created_at', 'desc')->get();
        return view('dashboard.contacts.index')->with(['contacts' => $contacts]);
    }

    public function getContactItem()
    {
        $contacts = ContactUs::orderBy('created_at', 'desc')->get();
        return view('dashboard.contacts.item')->with(['contacts' => $contacts]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all() ,[
            'message'=>'required',
            'email' => 'required'
        ]);  

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Email and Message fields should not be empty.');
        }

        $item =new ContactUs();
        $item->name = $request->input('name');
        $item->phone = $request->input('phone');
        $item->email = $request->input('email');
        $item->title = $request->input('title');
        $item->message = $request->input('message');
        $item->save();

        return redirect()->back()->with('success', 'Thank you for sending us a message. We will respond back shortly.');
    }
}
