<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Slider;
use App\Models\PhotographerProfile;

class HomeController extends Controller
{
    /**
     *
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
        $sliders = Slider::orderBy('priority')->get();
        $photographerProfiles = PhotographerProfile::with('user')->get();
        return view('Frontend.main',compact('sliders','photographerProfiles'));
    }
    public function adminpanel()
    {
        if(Gate::allows('is_admin'))
        {
           return view('admin.admin_master');
       }
        else
       abort(404);
      //return view('admin.admin_master');
    }

     public function userpanel()
    {

          // return view('fronted.main');
          abort(404);

    }
}
