@extends('backend.layouts.app')

@section('heading')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Daftar Motor</h4>
            </div>
        </div>

        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <a href="{{ route('create.motor') }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>
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
                                    <th width="20%">Gambar</th>
                                    <th>Merek</th>
                                    <th>Nama Motor</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($motor as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}.</td>
                                        <td>
                                            <img src="{{ url($item->gambar) }}" class="img-fluid" alt="">
                                        </td>
                                        <td>{{ $item->merekMotor->merek }}</td>
                                        <td>{{ $item->nama_motor }}</td>
                                        <td>{{ $item->tahun }}</td>

                                        <td class="text-center">
                                            <a href="{{ route('edit.motor', $item->slug) }}"
                                                class="btn btn-success btn-sm btn-flat mr-2"><i class="fa fa-edit"></i>
                                                Edit</a>
                                            <a href="{{ route('delete.motor', $item->slug) }}"
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
