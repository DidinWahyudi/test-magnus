<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Feature;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Home Page';

        $destination = Destination::all();
        $feature = Feature::all();

        return view('welcome', compact('destination', 'title', 'feature'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $title = 'Dashboard Page';

        $destination = Destination::all();
        $feature = Feature::all();

        return view('home', compact('destination', 'title', 'feature'));
    }
}
