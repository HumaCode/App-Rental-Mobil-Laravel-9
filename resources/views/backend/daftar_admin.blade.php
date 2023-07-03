@extends('backend.layouts.app')

@section('heading')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Daftar Admin</h4>
            </div>
        </div>

        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <a href="{{ route('tambah.admin') }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>
                    &nbsp; Tambah</a>
            </ol>
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
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($admin as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}.</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('edit.admin', $item->id) }}"
                                                class="btn btn-success btn-sm btn-flat mr-2"><i class="fa fa-edit"></i>
                                                Edit</a>
                                            <a href="{{ route('delete.admin', $item->id) }}"
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
