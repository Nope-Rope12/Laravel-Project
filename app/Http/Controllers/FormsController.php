<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=ContactUs::all();
        return view('index',compact('contacts'));
        //compact to share data from backend to frontens
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "username"=>"required | min:5 | max:20",
            "gender"=>"required | in:male,female",
            "message"=>"nullable",
            "class"=>"required | max:10",
            "email"=>"required | email | max:20",
        ]);
        //dump and dive 
        //dd($request->all())

        $contact = new ContactUs();
        $contact->username=$request->username;
        $contact->gender=$request->gender;
        $contact->class=$request->class;
        $contact->email=$request->email;
        $contact->message=$request->message;

        $contact->save();

        return redirect()->route('form.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contactus=ContactUs::find($id);
        return view('edit',compact('contactus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "username"=>"required | min:5 | max:20",
            "gender"=>"required | in:male,female",
            "message"=>"nullable",
            "class"=>"required | max:10",
            "email"=>"required | email | max:20",
        ]);
        //dump and dive 
        //dd($request->all())

        $contact = ContactUs::find($id);
        $contact->username=$request->username;
        $contact->gender=$request->gender;
        $contact->class=$request->class;
        $contact->email=$request->email;
        $contact->message=$request->message;

        $contact->save();

        return redirect()->route('form.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contactus=ContactUs::find($id);
        $contactus->delete();
        return redirect()->route('form.index');
    }
}
