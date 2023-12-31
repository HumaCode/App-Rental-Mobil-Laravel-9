@extends('backend.layouts.app')

@push('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('backend') }}/css/trix.css">
    <script src="{{ asset('backend') }}/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        trix-editor {
            color: black;
        }
    </style>
@endpush

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Ubah Data Motor</h5>
                </div>
                <form action="{{ route('update.motor', $dataMotor->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <input type="hidden" name="slug" name="slug"
                                class="form-control form-control-sm @error('slug') is-invalid @enderror"
                                style="border-radius: 0px;" id="slug" readonly value="{{ old('slug') }}">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama_motor">Nama Motor</label>
                                    <input type="text"
                                        class="form-control input-rounded @error('nama_motor') is-invalid @enderror"
                                        name="nama_motor" value="{{ old('nama_motor', $dataMotor->nama_motor) }}"
                                        id="nama_motor">
                                    @error('nama_motor')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="merek_id">Merek</label>
                                    <select id="merek_motor_id" name="merek_motor_id"
                                        class="form-control input-rounded @error('merek_motor_id') is-invalid @enderror">
                                        <option selected disabled>-- Pilih --</option>

                                        @foreach ($merek as $item)
                                            @if ($item->id == $dataMotor->merek_motor_id)
                                                <option value="{{ $item->id }}" selected>{{ $item->merek_motor }}
                                                </option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->merek_motor }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                    @error('merek_motor_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="number" min="0"
                                        class="form-control input-rounded @error('tahun') is-invalid @enderror"
                                        name="tahun" value="{{ old('tahun', $dataMotor->tahun) }}">
                                    @error('tahun')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket_lain">Keterangan Lain</label>
                            <input id="ket_lain" type="hidden" name="ket_lain"
                                value="{{ old('ket_lain', $dataMotor->ket_lain) }}">
                            <trix-editor input="ket_lain"></trix-editor>
                            @error('ket_lain')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="{{ url($dataMotor->gambar) }}" class="img-fluid" class="mb-2" width="30%"
                                    alt="" id="showImage">
                                {{-- <img
                                    src="{{ $setting->logo == null ? asset('backend/images/noimage.png') : \Storage::url($setting->logo) }}"
                                    class="img-fluid" class="mb-2" width="30%" alt="" id="showImage"> --}}
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Gambar</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('gambar') is-invalid @enderror" name="gambar"
                                            id="gambar" accept=".png,.jpg">
                                        <label class="custom-file-label">Pilih Gambar </label>

                                    </div>
                                </div>
                                <span class="text-dark">ukuran gambar maksimal 800x500
                                    pixel, size max 5Mb</span>
                                @error('gambar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>
                            &nbsp; Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#gambar').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })

        // slug
        const nama_motor = document.querySelector('#nama_motor');
        const slug = document.querySelector('#slug');

        nama_motor.addEventListener('change', function() {
            fetch('/motor/checkSlug?nama_motor=' + nama_motor.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })
    </script>
@endpush
