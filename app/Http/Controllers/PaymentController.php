<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
         return view('Frontend.bookingphotographer.payment');
   }

   public function displayPaymentMethods()
   {
    $payment=Payment::get();
    return view('Frontend.bookingphotographer.bookingpayment',compact('payment'));
   }


   public function create()
   {
      $payment=new Payment;
      return view('admin.payment.create',compact('payment'));
   }

   public function index()
{
   $payment=Payment::get();
   return view('admin.payment.index',compact('payment'));
}

public function store(Request $request)
{
   $data=$request->all();

   Payment::create($data);

   return redirect()->route('payment.index');
}

   public function edit($id)
{
  $payment=Payment::find($id);
  return view('admin.payment.create',compact('payment'));
}


public function update(Request $request,$id)
{
   $payment=Payment::find($id);
  $data=$request->all();


  $payment->update($data);
  return redirect()->route('payment.index');
}
  public function delete(Request $request,$id)
  {
    $payment=Payment::find($id);
    $data=$request->all();

    $payment->delete();
    return redirect()->route('payment.index');
  }
}
