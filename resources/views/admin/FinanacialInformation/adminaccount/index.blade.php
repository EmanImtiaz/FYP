@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Payment Accounts Table</h1>
        </div>
    <div class="text-end">
        <a class="btn btn-info" href="{{  route('paymentaccounts.create') }}">Create</a>
        </div>
        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Account Holder Name</th>
                <th>Bank Name</th>
                <th>Account Holder Number</th>
                <th>IBAN</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($paymentaccounts as $key=> $paymentaccounts)

                <tr>
                    <td>{{  ++$key }}</td>
                   <td>{{ $paymentaccounts->accountholder_name }}</td>
                   <td>{{ $paymentaccounts->bank_name }}</td>
                   <td>{{ $paymentaccounts->accountholder_no }}</td>
                   <td>{{ $paymentaccounts->IBAN }}</td>
                   <td><a class="btn btn-primary" href="{{ route('paymentaccounts.edit',['id'=>$paymentaccounts->id]) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('paymentaccounts.delete',['id'=>$paymentaccounts->id]) }}">Delete</a></td>

                  </tr>

                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


@endsection
