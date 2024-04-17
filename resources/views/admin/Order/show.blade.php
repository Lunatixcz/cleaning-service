@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="block block-rounded mb-0">
            <div class="block-header block-header-default">
                <h1 class="text-4xl mb-0">
                    @php
                        $date = \Carbon\Carbon::parse($payment->order->date)->format('y');
                        $id = str_pad($payment->order_id, 3, '0', STR_PAD_LEFT);
                        $idFormat = $date . '/' . $id;
                    @endphp
                    Order Detail
                </h1>
            </div>
            <div class="block-content block-content-full">
                <div class="row mb-4">
                    <div class="col-lg-4 mb-4">
                        <h1 class="h3 mb-1">Recipient Detail</h1>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <p class="mb-0">Recipient's name</p>
                            <h1 class="h2">{{ $payment->order->recipient_name }}</h1>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Phone number</p>
                            <h1 class="h2">{{ $payment->order->phone_number }}</h1>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Address detail</p>
                            <h1 class="h4">
                                {{ implode(', ', [$payment->order->address, $payment->order->city, $payment->order->state, $payment->order->postal_code]) }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-4 mb-4">
                        <h1 class="h3 mb-1">Order Detail</h1>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <p class="mb-0">Order ID</p>
                            <h1 class="h2">{{ $idFormat }}</h1>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Date and Time</p>
                            <h1 class="h2">
                                {{ \Carbon\Carbon::parse($payment->order->date . ' ' . $payment->order->time)->format('h.i a, d F Y') }}
                            </h1>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Service duration</p>
                            <h1 class="h2">{{ $payment->order->duration }} hours</h1>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Number of workers</p>
                            <h1 class="h2">{{ $payment->order->total_personnel_ordered }}</h1>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0">Service price</p>
                            <h1 class="h2">Rp{{ number_format($payment->order->estimated_price, 0, ',', '.') }},00</h1>
                        </div>
                    </div>
                </div>
                @if ($payment->status === 'on progress')
                    <div class="row mb-4">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8 col-xl-5 d-flex justify-content-end">
                            <form action="{{ route('payment.update', $payment)}}" class="space-x-1" method="POST">
                                @csrf
                                @method("PUT")
                                <input type="hidden" name="status_payment" id="status_payment" value="">
                                <button type="submit" class="btn btn-outline-danger"
                                    onclick="setStatus('cancelled')">Cancel
                                    Order</button>
                                <button type="submit" class="btn btn-success" onclick="setStatus('finished')">Finish
                                    Order</button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        function setStatus(status) {
            document.getElementById('status_payment').value = status;
        }
    </script>
@endsection
