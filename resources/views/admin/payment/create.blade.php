@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$payment->id != null ? 'Update' : 'Create'}} Payment Method</h1>
</div>
<div class="container py-5">
    <form action="{{$payment->id != null ? route('payment.update', ['id'=>$payment->id]) : route('payment.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <label for="payment_method" class="form-label">Payment Method:</label>
                        <input id="payment_method" class="form-control" type="text" name="payment_method" value={{$payment->payment_method}}  >
                    </div>

                    <div class="col-4 text-start">
                        <input type="Submit" value="save" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

