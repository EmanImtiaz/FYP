<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PhotographerController extends Controller
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
    public function photographerpanel()
    {
        if(Gate::allows('is_photographer'))
        {
           return view('admin.admin_master');
       }
        else
       abort(403,'unauthorized');

    }
}
