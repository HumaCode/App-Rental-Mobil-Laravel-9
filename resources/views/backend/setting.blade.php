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
                <h5 class="card-title">Pengaturan Website</h5>
            </div>
            <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Nama Aplikasi</label>
                                <input type="text"
                                    class="form-control input-rounded @error('title') is-invalid @enderror" name="title"
                                    value="{{ $setting->title }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keyword">Keyword</label>
                                <input type="text"
                                    class="form-control input-rounded @error('keyword') is-invalid @enderror"
                                    name="keyword" value="{{ $setting->keyword }}">
                                @error('Keyword')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="keyword">Meta Description</label>
                        <textarea name="meta_description" id="meta_description " rows="5"
                            class="form-control @error('meta_description') is-invalid @enderror">{{ $setting->meta_description }}</textarea>

                        @error('meta_description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="about">Tentang Website</label>
                        <input id="about" type="hidden" name="about" value="{{ $setting->about }}">
                        <trix-editor input="about"></trix-editor>
                        @error('about')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location">Lokasi &nbsp;<a href="{{ $setting->location }}"
                                        target="_blank"><small class="text-danger"><b>(lihat)</b></small></a></label>

                                <input type="text"
                                    class="form-control input-rounded @error('location') is-invalid @enderror"
                                    name="location" value="{{ $setting->location }}">
                                @error('location')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telp">Telepon</label>

                                <input type="text"
                                    class="form-control input-rounded @error('telp') is-invalid @enderror" name="telp"
                                    value="{{ $setting->telp }}">
                                @error('telp')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email_web">Email</label>
                                    <input type="text"
                                        class="form-control input-rounded @error('email_web') is-invalid @enderror"
                                        name="email_web" value="{{ $setting->email_web }}">
                                    @error('email_web')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fb">Facebook</label>

                                <input type="text" class="form-control input-rounded @error('fb') is-invalid @enderror"
                                    name="fb" value="{{ $setting->fb }}">
                                @error('fb')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ig">Instagram</label>
                                <input type="text" class="form-control input-rounded @error('ig') is-invalid @enderror"
                                    name="ig" value="{{ $setting->ig }}">
                                @error('ig')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="twitter">Twetter</label>
                                <input type="text"
                                    class="form-control input-rounded @error('twitter') is-invalid @enderror"
                                    name="twitter" value="{{ $setting->twitter }}">
                                @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="{{ $setting->logo == null ? asset('backend/images/noimage.png') : url($setting->logo) }}"
                                class="img-fluid" class="mb-2" width="30%" alt="" id="showImage">
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Logo</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('logo') is-invalid @enderror"
                                        name="logo" id="logo" accept=".png,.jpg">
                                    <label class="custom-file-label">Pilih Logo</label>
                                    @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>
                        &nbsp; Ubah Setingan Website</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
            $('#logo').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
</script>
@endpush