@extends('admin.admin_master')

@section('new')

<div>
    <h1 class="text-center">{{$paymentaccounts->id != null ? 'Update' : 'Create'}} Payment Accounts</h1>
</div>
<div class="container py-5">
    <form action="{{$paymentaccounts->id != null ? route('paymentaccounts.update', ['id'=>$paymentaccounts->id]) : route('paymentaccounts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="accountholder_name">Account Holder Name:</label>
                            <input type="text" name="accountholder_name" class="form-control" required value="{{  $paymentaccounts->accountholder_name }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="bank_name">Bank Name:</label>
                            <input type="text" name="bank_name" class="form-control" required value="{{  $paymentaccounts->bank_name }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="accountholder_no">Account Holder Number:</label>
                            <input type="text" name="accountholder_no" class="form-control" required value="{{  $paymentaccounts->accountholder_no }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="IBAN">IBAN:</label>
                            <input type="text" name="IBAN" class="form-control"  value="{{  $paymentaccounts->IBAN }}">
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                </div>
</div>
        </form>
    </div>
@endsection

