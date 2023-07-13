@extends('backend.layouts.app')

@section('heading')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Testimoni</h4>
        </div>
    </div>


</div>
@endsection

@push('css')
<!-- Datatable -->
<link href="{{ asset('backend') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

<style>
    table.dataTable tbody tr,
    table.dataTable tbody td {
        color: black;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        color: white;
    }
</style>
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead class="text-center table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Testimoni</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($testimoni as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}.</td>

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->testimoni }}</td>
                                <td>{{ $item->message }}</td>

                                <td class="text-center">

                                    <a href="{{ route('admin.delete_testimoni', $item->id) }}"
                                        class="btn btn-danger btn-sm btn-flat"
                                        onClick="return confirm('Yakin akan menghapus data ini?');"><i
                                            class="fa fa-edit"></i>&nbsp; Hapus</a>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<!-- Datatable -->
<script src="{{ asset('backend') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/js/plugins-init/datatables.init.js"></script>
@endpush