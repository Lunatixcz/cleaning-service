<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            {{ $title }}
        </h3>
    </div>
    <div class="block-content">
        <div class="row mt-2 justify-content-md-center">
            <div class="col-12">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable"
                    id="DataTables_Table_{{ $tableId }}" aria-describedby="DataTables_Table_{{ $tableId }}_info">
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
                                data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending" style="width:80px"
                                aria-label=": Activate to invert sorting" tabindex="0"><span
                                    class="dt-column-title" role="button"></span><span
                                    class="dt-column-order"></span></th>
                            <th data-dt-column="1" rowspan="1" colspan="1" style="width: 20%"
                                class="dt-orderable-asc dt-orderable-desc" aria-label="Name: Activate to sort"
                                tabindex="0"><span class="dt-column-title" role="button">Name</span><span
                                    class="dt-column-order"></span></th>
                            <th class="d-none d-sm-table-cell dt-orderable-asc dt-orderable-desc" data-dt-column="3"
                                rowspan="1" colspan="1" aria-label="Access: Activate to sort" tabindex="0"><span
                                    class="dt-column-title" role="button">Email</span><span class="dt-column-order"></span>
                            </th>
                            <th class="d-none d-sm-table-cell text-center dt-orderable-asc dt-orderable-desc"
                                style="width: 15%;" data-dt-column="4" rowspan="1" colspan="1"
                                aria-label="Profile: Activate to sort" tabindex="0"><span class="dt-column-title"
                                    role="button">Created</span><span class="dt-column-order"></span></th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $i => $item)
                            <tr>
                                <td class="text-center">{{ $i + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-end">{{ $item->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <div class="mb-2 space-x-2" style="display: flex; align-items: center;">
                                        <a href="{{ route($editRoute, $item->id)}}" class="btn btn-sm btn-primary">
                                            View
                                        </a>
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
