@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="block block-rounded mb-0">
            <div class="block-header block-header-default">
                <h1 class="text-4xl mb-0">
                    Payment
                </h1>
            </div>
            <div class="block-content block-content-full">
                <div class="row mb-4">
                    <div class="col-lg-4 mb-4">
                        <h1 class="h3 mb-1">Payment Detail</h1>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <p class="text-muted mb-0">Amount to pay</p>
                            <h1 class="h2">Rp{{ number_format($order->estimated_price, 0, ',', '.') }},00</h1>
                        </div>
                        <div class="mb-4">
                            <p class="text-muted mb-0">Recipient's name</p>
                            <h1 class="h2 mb-4">{{ $order->recipient_name }}
                            </h1>
                        </div>
                        <div class="mb-4">
                            <p class="text-muted mb-0">Address detail</p>
                            <h1 class="h4">
                                {{ implode(', ', [$order->address, $order->city, $order->state, $order->postal_code]) }}
                            </h1>
                        </div>

                    </div>
                </div>
                <form action="{{ route('payment.store', $order->id) }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4">
                            <h1 class="h3 mb-1">Method of Payment</h1>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <label class="form-label" for="example-select">Select payment method</label>
                            <select class="form-select" id="example-select" name="payment_method">
                                <option selected="">Open this select menu</option>
                                <option value="credit">Credit/Debit</option>
                                <option value="bank">Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4" id="credit" style="display: none">
                        <div class="col-lg-4 mb-4">
                            <h1 class="h3 mb-1">Card payment</h1>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="cc-content">
                                <div class="mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="payment-card-number"
                                            placeholder="**** **** **** ****">
                                        <label class="form-label" for="payment-card-number">Card Number</label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control"
                                                id="payment-expriration"placeholder="MM / YY">
                                            <label class="form-label" for="payment-expriration">MM / YY</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="payment-cvc" placeholder="***">
                                            <label class="form-label" for="payment-cvc">CVC</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="payment-card-name"
                                            placeholder="Enter your name">
                                        <label class="form-label" for="payment-card-name">Name on Card</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4" id="bank" style="display: none">
                        <div class="col-lg-4 mb-4">
                            <h1 class="h3 mb-1">Bank Transfer</h1>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <p class="text-muted mb-0">Virtual account number</p>
                                <h1 class="h2 mb-0">888 {{ $order->phone_number }}</h1>
                                <p class="text-muted mb-0">
                                    1. Go to your preferred mobile banking app or nearest ATM.<br>
                                    2. Enter the <strong>virtual account number</strong> above. <br>
                                    3. Make sure the total amount is the same as the amount above. <br>
                                    4. Proceed payment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4 mb-4">
                            <h1 class="h3 mb-1">Confirm Payment</h1>
                        </div>
                        <div class="col-lg-8 col-xl-5 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-money-check-dollar me-2"></i>
                                Confirm Payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('example-select').addEventListener('change', function() {
            var selectedOption = this.value;
            if (selectedOption === 'credit') {
                document.getElementById('credit').style.display = 'flex';
                document.getElementById('bank').style.display = 'none';
            } else if (selectedOption === 'bank') {
                document.getElementById('credit').style.display = 'none';
                document.getElementById('bank').style.display = 'flex';
            } else {
                document.getElementById('credit').style.display = 'none';
                document.getElementById('bank').style.display = 'none';
            }
        });
    </script>
@endsection
