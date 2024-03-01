@extends('admin.admin_master')

@section('new')

<div class="container py-3">
    <div class="text-center py-2">
        <h1>Bookings Table</h1>
    </div>

    <table class="container text-center table  table-striped-columns table-striped table-border border-5 border-danger py-2">
        <thead class="bg-dark text-light">
            <tr>
                <th>#</th>
                <th>User ID</th>
                <th>Photographer Profile ID</th>
                <th>Province ID</th>
                <th>City ID</th>
                <th>Town ID</th>
                <th>Payment ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Payment Method Options</th>
                <th>Evidence</th>
                <th>Account Name</th>
                <th>Account Number</th>
                <th>IS_PAID</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $key => $booking)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $booking->user_id }}</td>
                <td>{{ $booking->photographer_profile_id }}</td>
                <td>{{ $booking->province_id }}</td>
                <td>{{ $booking->city_id }}</td>
                <td>{{ $booking->town_id }}</td>
                <td>{{ $booking->payment_id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->payment_method_options }}</td>
                <td><img src="{{ $booking->evidence }}" width="100"></td>
                <td>{{ $booking->account_name }}</td>
                <td>{{ $booking->account_number }}</td>
                <td>{{ $booking->is_paid }}</td>
                <td>{{ $booking->total_amount }}</td>
                @if($booking->payment_method_options == 0)
                    <td>
                        <form method="POST" action="{{ route('approve.booking', ['id' => $booking->id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form method="POST" action="{{ route('disapprove.booking', ['id' => $booking->id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Disapprove</button>
                        </form>
                    </td>
                @endif
            {{--    <td><a class="btn btn-danger" href="{{ route('booking.delete',['id'=>$booking->id]) }}">Delete</a></td>   --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
