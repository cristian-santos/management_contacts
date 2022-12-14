<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('name')->get();
        $count = Contact::orderBy('contact')->count();

        return view('home', compact('data', 'count'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5|max:100',
            'contact' => 'required|unique:contact|max:9',
            'email' => 'required|unique:contact|email|max:100'
        ];

        $feedback = [
            'required' => 'The :attribute field must be filled',
            'name.min' => 'The :attribute field must be at least 3 characters long',
            'name.max' => 'The :attribute field must have a maximum of 100 characters',
            'email.max' => 'The :attribute field must have a maximum of 25 characters',
            'email' => 'The :attribute field was not filled in correctly',
        ];
        $request->validate($rules, $feedback);

        Contact::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email
        ]);

        return redirect()->route('contact.create')->with('message', 'Contact saved successfully');

    }

    public function show($id)
    {
        $contact = DB::table('contact')->where('id', $id)->first();

        return view('show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|min:5|max:100',
            'contact' => 'required|max:9',
            'email' => 'required|email'
        ];

        $feedback = [
            'required' => 'The :attribute field must be filled',
            'name.min' => 'The :attribute field must be at least 3 characters long',
            'name.max' => 'The :attribute field must have a maximum of 100 characters',
            'email' => 'The :attribute field was not filled in correctly',
        ];
        $request->validate($rules, $feedback);

        $contact = Contact::find($id);

        $contact->update($request->all());

        return redirect()->route('contact.edit', $id)->with('message', 'Contact edited successfully');
    }

    public function destroy($id)
    {
        $contact = Contact::destroy($id);

        return redirect()->route('contact.index')->with('message', 'Contact deleted successfully');

    }
}
