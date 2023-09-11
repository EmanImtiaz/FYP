<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function adminpanel()
    {
         return view('admin.admin_master');
   }
}
