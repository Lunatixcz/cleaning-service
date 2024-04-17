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
    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="public/css/codebase.min.css">
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Employee's Data
                </h3>
                <a href="{{ route('employees.create') }}" class="btn btn-secondary">
                    New Employee
                </a>
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
                                        tabindex="0"><span class="dt-column-title" role="button">Employee ID</span><span
                                            class="dt-column-order"></span></th>
                                    <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" data-dt-column="2"
                                        rowspan="1" colspan="1" aria-label="Email: Activate to sort" tabindex="0">
                                        <span class="dt-column-title" role="button">Name</span><span
                                            class="dt-column-order"></span>
                                    </th>
                                    <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc"
                                        style="width: 15%;" data-dt-column="3" rowspan="1" colspan="1"
                                        aria-label="Access: Activate to sort" tabindex="0"><span class="dt-column-title"
                                            role="button">Username</span><span class="dt-column-order"></span></th>
                                    <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc"
                                        style="width: 15%;" data-dt-column="3" rowspan="1" colspan="1"
                                        aria-label="Access: Activate to sort" tabindex="0"><span class="dt-column-title"
                                            role="button">Address</span><span class="dt-column-order"></span></th>
                                    <th class="d-none d-sm-table-cell text-center dt-orderable-asc dt-orderable-desc"
                                        style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1"
                                        aria-label="Profile: Activate to sort" tabindex="0"><span class="dt-column-title"
                                            role="button">Since</span><span class="dt-column-order"></span></th>
                                    <th class="d-none d-sm-table-cell text-center dt-orderable-asc dt-orderable-desc"
                                        style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1"
                                        aria-label="Profile: Activate to sort" tabindex="0"><span class="dt-column-title"
                                            role="button">Salary</span><span class="dt-column-order"></span></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $i => $employee)
                                    <tr>
                                        <td class="text-center">{{ $i + 1 }}</td>
                                        <td>{{ 'ST-'. $employee->id }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->username }}</td>
                                        <td>{{ $employee->address }}</td>
                                        <td class="text-end">{{ $employee->created_at->format('d-m-Y') }}</td>
                                        <td class="text-end">{{ 'Rp' . number_format($employee->salary, 0, ',', '.') }}</td>
                                        <td>
                                            <div class="mb-2 space-x-2" style="display: flex; align-items: center;">
                                                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-fw fa-edit"></i>
                                                </a>
                                                <form action="{{ route('employees.destroy', $employee) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="employee-delete-button" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-fw fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
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
    </div>
@endsection
