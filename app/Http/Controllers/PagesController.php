<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        
        $data = array(
            'test' => 'Thats a test',
            'title' => 'Services',
            'text' => 'Welcome To my Services Laravel Project',
            'services' => ['Web Design', 'Build PC']
        );
        return view('pages.index')->with($data);
        // return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'text' => 'Welcome To my Services Laravel Project',
            'services' => ['Web Design', 'Build PC']
        );
        return view('pages.services')->with($data);
    }
}
