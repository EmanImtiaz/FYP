<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminPanelController extends Controller
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
   public function adminpanel()
   {
       if(Gate::allows('is_admin'))
       {
          return view('admin.admin_master');
      }
       else
      abort(403,'unauthorized');
     //return view('admin.admin_master');
   }
}
