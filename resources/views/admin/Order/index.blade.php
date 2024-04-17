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
            <h3 class="block-title">
                Employee's Data
            </h3>
        </div>
        <div class="block-content">
            <div class="row mt-2 justify-content-md-center">
                <div class="col-12 ">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable"
                        id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <colgroup>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr role="row">
                                <th class="text-center dt-type-numeric dt-orderable-asc dt-orderable-desc dt-ordering-asc"
                                    data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label=": Activate to invert sorting" tabindex="0"><span
                                        class="dt-column-title" role="button"></span><span
                                        class="dt-column-order"></span></th>
                                <th data-dt-column="1" rowspan="1" colspan="1"
                                    class="dt-orderable-asc dt-orderable-desc" aria-label="Name: Activate to sort"
                                    tabindex="0"><span class="dt-column-title" role="button">Name</span><span
                                        class="dt-column-order"></span></th>
                                <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" data-dt-column="2"
                                    rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0">
                                    <span class="dt-column-title" role="button">Time</span><span
                                        class="dt-column-order"></span>
                                </th>
                                <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc"
                                    style="width: 15%;" data-dt-column="3" rowspan="1" colspan="1"
                                    aria-label="Access: Activate to sort" tabindex="0"><span class="dt-column-title"
                                        role="button">Date</span><span class="dt-column-order"></span></th>
                                <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc"
                                    style="width: 15%;" data-dt-column="3" rowspan="1" colspan="1"
                                    aria-label="Access: Activate to sort" tabindex="0"><span class="dt-column-title"
                                        role="button">Status</span><span class="dt-column-order"></span></th>
                                <th class="d-none d-sm-table-cell text-center dt-orderable-asc dt-orderable-desc"
                                    style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1"
                                    aria-label="Profile: Activate to sort" tabindex="0"><span class="dt-column-title"
                                        role="button">Actions</span><span class="dt-column-order"></span></th>
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
                                    <a href="{{ route('adminOrder.show', $payment->id) }}" class="btn btn-primary">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
