<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyRegistration;
class CompanyRegistrationController extends Controller
{
    public function create()
    {
       $CompanyRegistration=new CompanyRegistration;
       return view('admin.users.Company registration.create',compact('CompanyRegistration'));
    }

    public function index()
 {
    $CompanyRegistration=CompanyRegistration::get();
    return view('admin.users.Company registration.index',compact('CompanyRegistration'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

if($request->has('logo'))
{
    $picture=$request->logo;
    $ext=$picture->getClientOriginalExtension();
    $file_name=time().'.'.$ext;
    $file_path='/assets/CompanyRegistration/';
    $picture->move(public_path().$file_path,$file_name);

    $data['logo']=$file_path.$file_name;
    CompanyRegistration::create($data);

    return redirect()->route('company.index');
 }

}
    public function edit($id)
{
   $CompanyRegistration=CompanyRegistration::find($id);
   return view('admin.users.Company registration.create',compact('CompanyRegistration'));
}

public function update(Request $request,$id)
{
    $CompanyRegistration=CompanyRegistration::find($id);
   $data=$request->all();

if($request->has('logo'))
{
   $picture=$request->logo;
   $ext=$picture->getClientOriginalExtension();
   $file_name=time().'.'.$ext;
   $file_path='/assets/CompanyRegistration/';
   $picture->move(public_path().$file_path,$file_name);

   $data['logo']=$file_path.$file_name;

}
   $CompanyRegistration->update($data);
   return redirect()->route('company.index');
}
   public function delete(Request $request,$id)
   {
     $CompanyRegistration=CompanyRegistration::find($id);
     $data=$request->all();

     $CompanyRegistration->delete();
     return redirect()->route('company.index');
   }
}
