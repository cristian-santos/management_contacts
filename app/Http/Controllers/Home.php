<?php

namespace App\Http\Controllers;

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

    public function edit()
    {
        return view('edit');
    }
}
