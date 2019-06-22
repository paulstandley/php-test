<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        $title = 'Welcome to Crudblogs!';
        //return view('pages/index', compact('title'));
        return view('pages/index')->with('title', $title);
    }

    public function about() {
        $title = 'Welcome to About!';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Welcome to Severces',
            'services' => ['Web Dev', 'Progarming', 'SEO'] 
        );
        return view('pages.services')->with($data);
    }

}
