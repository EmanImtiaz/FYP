<?php

namespace App\Http\Controllers;
use App\Models\PaymentAccount;
use Illuminate\Http\Request;

class PaymentAccountController extends Controller
{
    public function create()
    {
        $paymentaccounts = new PaymentAccount;
        return view('admin.FinanacialInformation.adminaccount.create', compact('paymentaccounts'));
    }

    public function index()
 {
    $paymentaccounts=PaymentAccount::get();
    return view('admin.FinanacialInformation.adminaccount.index',compact('paymentaccounts'));
 }
 public function edit($id)
 {
     $paymentaccounts = PaymentAccount::find($id);
     return view('admin.FinanacialInformation.adminaccount.create', compact('paymentaccounts'));
 }

 public function store(Request $request)
 {
    $request->validate(['accountholder_name'=>'required',
    'bank_name'=>'required',
    'accountholder_no'=>'required',
    'IBAN' => 'nullable',],
    ['accountholder_name.required'=>'Please enter accountholder_name',
    'accountholder_no.required'=>'Please enter accountholder_no']);

    $data=$request->all();
    PaymentAccount::create($data);
    return redirect()->route('paymentaccounts.index');

    }


 public function update(Request $request,$id)
 {
     $paymentaccounts=PaymentAccount::find($id);
    $data=$request->all();
  $paymentaccounts->update($data);
  return redirect()->route('paymentaccounts.index');

}
   public function delete(Request $request,$id)
   {
     $paymentaccounts=PaymentAccount::find($id);
     $data=$request->all();

     $paymentaccounts->delete();
     return redirect()->route('paymentaccounts.index');
   }
}
