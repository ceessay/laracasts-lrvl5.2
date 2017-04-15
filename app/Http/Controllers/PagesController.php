<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function index(){
        return view('pages.welcome');
    }

    public function about()
    {

        $staff = ['Sana', 'thiaba', 'abdoul','barka', 'mimi', 'alima'];

        return view('pages.about', compact('staff'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
