@extends('layout.master')

@section('kuchb')

     <img src="https://rstheme.com/products/html/shooter/shooter-html/images/banner/2.jpg" alt="">

    <div class="container mt-5">
        <h1>Select Payment Method</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <label for="creditCard" class="form-label">Credit Card</label>
                    </td>
                    <td>
                        <input type="radio" id="creditCard" name="paymentMethod" class="form-check-input" value="creditCard">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="cod" class="form-label">Cash on Delivery</label>
                    </td>
                    <td>
                        <input type="radio" id="cod" name="paymentMethod" class="form-check-input" value="cod">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-5">
            <button class="btn btn-primary me-md-2" type="button">confirmed</button>

          </div>
    </div>




@endsection
