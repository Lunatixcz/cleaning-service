@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
@endsection

@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h1 class="text-4xl mb-0">
                    Pending Order
                </h1>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">No.</th>
                            <th>Name</th>
                            <th class="text-start">Date</th>
                            <th class="d-none d-sm-table-cell">Time</th>
                            <th>Address</th>
                            <th class="text-start" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $i => $order)
                            <tr>
                                <td class="text-center">{{ $i + 1 }}</td>
                                <td>{{ $order->recipient_name }}</td>
                                <td class="text-start">{{ $order->date }}</td>
                                <td>{{ \Carbon\Carbon::createFromTimeString($order->time)->format('H:i') }}</td>
                                <td>{{ $order->address }}</td>
                                <td>
                                    <div class="mb-2 space-x-2" style="display: flex; align-items: center;">
                                        <a href="{{ route('order.edit', $order) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <form action="{{ route('order.destroy', $order) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="order-delete-button" class="btn btn-sm btn-primary">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('payment.create', ['order' => $order]) }}"
                                            class="btn btn-sm btn-primary">
                                            Payment
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
