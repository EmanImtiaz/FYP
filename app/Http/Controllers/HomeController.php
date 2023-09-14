<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        return view('Frontend.main');
    }
    public function adminpanel()
    {
        if(Gate::allows('is_admin'))
        {
           return view('admin.admin_master');
        }
        else{
       abort(404);}
     // return view('admin.admin_master');
    }
}
