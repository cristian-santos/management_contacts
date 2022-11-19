<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function index()
    {
        $data = DB::table('contact')->orderBy('name')->get();
        $count = DB::table('contact')->count();

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

        Contact::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email
        ]);

        return redirect()->route('contact.create')->with('message', 'Contact saved successfully');

    }

    public function edit()
    {
        return view('edit');
    }
}
