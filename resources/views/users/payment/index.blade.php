@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h1 class="text-4xl mb-0">
                    Order History
                </h1>
            </div>
            <div class="block-content">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;"></th>
                            <th>Name</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th class="text-center" style="width: 20%">Status</th>
                            <th class="text-center" style="width: 10%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $i => $payment)
                            <tr>
                                <td class="text-center">{{ $i + 1 }}</td>
                                <td>{{ $payment->order->recipient_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($payment->order->time)->format('h.i a') }}</td>
                                <td>{{ \Carbon\Carbon::parse($payment->order->date)->format('d F Y') }}</td>
                                <td class="text-center">
                                    @php
                                        $payment_status = $payment->status;
                                    @endphp
                                    @if ($payment_status === 'on progress')
                                        <span class="badge bg-warning fs-6">
                                            <i class="fa-solid fa-spinner fa-spin me-2"></i>
                                            {{ $payment_status }}
                                        </span>
                                    @elseif ($payment_status === 'finished')
                                        <span class="badge bg-success fs-6">
                                            <i class="fa-solid fa-check me-2"></i>
                                            {{ $payment_status }}
                                        </span>
                                    @else
                                        <span class="badge bg-danger fs-6">
                                            <i class="fa-solid fa-xmark me-2"></i>
                                            {{ $payment_status }}
                                        </span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('payment.show', $payment) }}" class="btn btn-primary">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
