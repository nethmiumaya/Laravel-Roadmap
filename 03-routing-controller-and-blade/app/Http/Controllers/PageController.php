<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $team = ['Umaya', 'Nethmi', 'Chanuthya']; 
        return view('about', compact('team'));
    }
    public function home()
{
    return view('home');
}

}
