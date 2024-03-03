@extends('admin.layouts.app')
@section('title', $titlePage)
@section('content')
    <div>
        <div class="mb-2 d-flex align-items-center justify-content-between">
            <h2>{{ $titlePage }}</h2>
            <div>
                <a href="{{ route($route.'.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                <a href="#!" class="btn btn-success"><i class="fa fa-sync"></i> Refresh</a>
            </div>
        </div>
        <div class="card shadow-sm border-0">
            <div class="card-header py-3">
                <h5 class="card-title mb-0">Data</h5>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="DataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="1%">No.</th>
                                <th width="1%">Opsi</th>
                                <th width="1%">Gambar</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        var table;
        $(document).ready(function() {
            table = $('#DataTable').DataTable({
                lengthMenu: [
                    [5, 10, 25, 50, 100, 200, 350, -1],
                    [5, 10, 25, 50, 100, 200, 350, "All"]
                ],
                searching: true,
                processing: true,
                serverSide: true,
                order: [],
                ajax: {
                    url: "{{ route($route.'.table') }}",
                    type: "POST",
                    data: function(d) {},
                    "error": function(jqXHR) {
                        alert('error load data')
                    }
                },
                "fnDrawCallback": function(oSettings) {},
                "createdRow": function(row, data, index) {},
                "columns": [{
                        "data": null,
                        render: function(data, type, row, meta) {
                            return +meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        "data": "opsi",
                        "className": "text-center"
                    },
                    {
                        "data": "file", "className":"text-center"
                    },
                    {
                        "data": "nama",
                    },
                    {
                        "data": "deskripsi",
                    },
                ],
                "columnDefs": [{
                        "searchable": false,
                        "orderable": false,
                        "targets": [0, 1],
                    },
                    {
                        "className": "text-center",
                        "targets": [0, 1]
                    }
                ],
            });
        });
    </script>
@endpush
