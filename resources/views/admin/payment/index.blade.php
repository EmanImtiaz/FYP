@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Payment Method Table</h1>
        </div>
    <div class="text-end">
        <a class="btn btn-info" href="{{  route('payment.create') }}">Create</a>
        </div>
        <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
            <thead class="bg-dark text-light">
              <tr>
                <th>#</th>
                <th>Payment method</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payment as $key=> $payment)

                <tr>
                    <td>{{  ++$key }}</td>

                   <td>{{ $payment->payment_method }}</td>
                   <td><a class="btn btn-primary" href="{{ route('payment.edit',['id'=>$payment->id]) }}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('payment.delete',['id'=>$payment->id]) }}">Delete</a></td>

                  </tr>

                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>


@endsection
