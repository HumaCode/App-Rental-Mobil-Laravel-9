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
                <h5 class="card-title">Ubah Data Mobil</h5>
            </div>
            <form action="{{ route('update.mobil', $dataMobil->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <input type="hidden" name="slug" name="slug"
                            class="form-control form-control-sm @error('slug') is-invalid @enderror"
                            style="border-radius: 0px;" id="slug" readonly value="{{ old('slug') }}">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_mobil">Nama Mobil</label>
                                <input type="text"
                                    class="form-control input-rounded @error('nama_mobil') is-invalid @enderror"
                                    name="nama_mobil" value="{{ old('nama_mobil', $dataMobil->nama_mobil) }}"
                                    id="nama_mobil">
                                @error('nama_mobil')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="merek_id">Merek</label>
                                <select id="merek_id" name="merek_id"
                                    class="form-control input-rounded @error('merek_id') is-invalid @enderror">
                                    <option selected disabled>-- Pilih --</option>

                                    @foreach ($merek as $item)
                                    @if ($item->id == $dataMobil->merek_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->merek }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->merek }}</option>
                                    @endif
                                    @endforeach

                                </select>
                                @error('merek_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="number" min="0"
                                    class="form-control input-rounded @error('tahun') is-invalid @enderror" name="tahun"
                                    value="{{ old('tahun', $dataMobil->tahun) }}">
                                @error('tahun')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jml_kursi">Jumlah Kursi</label>
                                <input type="number" min="0"
                                    class="form-control input-rounded @error('jml_kursi') is-invalid @enderror"
                                    name="jml_kursi" value="{{ old('jml_kursi', $dataMobil->jml_kursi) }}">
                                @error('jml_kursi')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_bbm">Jenis BBM</label>
                                <input type="text"
                                    class="form-control input-rounded @error('jenis_bbm') is-invalid @enderror"
                                    name="jenis_bbm" value="{{ old('jenis_bbm', $dataMobil->jenis_bbm) }}">
                                @error('jenis_bbm')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="ket_lain">Keterangan Lain</label>
                        <input id="ket_lain" type="hidden" name="ket_lain"
                            value="{{ old('ket_lain', $dataMobil->ket_lain) }}">
                        <trix-editor input="ket_lain"></trix-editor>
                        @error('ket_lain')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status" type="checkbox"
                                value="{{ $dataMobil->status == 1 ? '1' : '0' }}" {{ $dataMobil->status == 1 ? 'checked'
                            : '' }} id="invalidCheck">
                            <label class="form-check-label text-dark" for="invalidCheck">
                                Status Mobil
                            </label>
                            {{-- <div class="invalid-feedback">
                                You must agree before submitting.
                            </div> --}}
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="{{ url($dataMobil->gambar) }}" class="img-fluid" class="mb-2" width="30%" alt=""
                                id="showImage">
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
                                    <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror"
                                        name="gambar" id="gambar" accept=".png,.jpg">
                                    <label class="custom-file-label">Pilih Gambar</label>
                                </div>
                            </div>
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
    const nama_mobil = document.querySelector('#nama_mobil');
    const slug      = document.querySelector('#slug');

    nama_mobil.addEventListener('change', function() {
        fetch('/mobil/checkSlug?nama_mobil=' + nama_mobil.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
</script>
@endpush