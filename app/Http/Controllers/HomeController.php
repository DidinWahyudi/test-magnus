<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Feature;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Home';

        // section hero
        $subTitleHero = $this->content('sub-title-hero');
        $titleHero = $this->content('title-hero');
        $imageFront = $this->content('image-hero-front');
        $imageBack = $this->content('image-hero-back');

        // section feature
        $subTitleFeature = $this->content('sub-title-feature');
        $titleFeature = $this->content('title-feature');
        $contentFeature = $this->content('content-feature');


        $destination = Destination::all();
        $feature = Feature::all();

        return view('welcome', compact('imageFront','imageBack','subTitleFeature','titleFeature','contentFeature','destination', 'title', 'feature', 'subTitleHero', 'titleHero'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
       $title = 'Dashboard';

        // section hero
        $subTitleHero = $this->content('sub-title-hero');
        $titleHero = $this->content('title-hero');
        $imageFront = $this->content('image-hero-front');
        $imageBack = $this->content('image-hero-back');

        // section feature
        $subTitleFeature = $this->content('sub-title-feature');
        $titleFeature = $this->content('title-feature');
        $contentFeature = $this->content('content-feature');


        $destination = Destination::all();
        $feature = Feature::all();

        return view('home', compact('imageFront','imageBack','subTitleFeature','titleFeature','contentFeature','destination', 'title', 'feature', 'subTitleHero', 'titleHero'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function content($title = null)
    {
        $data = Content::where('title','=',$title)->first();
        return $data;
    }
}
