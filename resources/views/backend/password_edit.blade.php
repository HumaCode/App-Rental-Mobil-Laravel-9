@extends('backend.layouts.app')


@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ubah Password</h5>
            </div>
            <form id="myForm" action="{{ route('update.password') }}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="passLama">Password Lama</label>
                        <input type="password" class="form-control input-rounded" name="passLama">
                    </div>

                    <div class="form-group">
                        <label for="passBaru">Password Baru</label>
                        <input type="password"
                            class="form-control input-rounded @error('password') is-invalid @enderror" name="passBaru">
                        @error('passBaru')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="passBaru_confirmation">Ulangi Password</label>
                        <input type="password" class="form-control input-rounded" name="passBaru_confirmation"
                            id="passBaru_confirmation">
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>
                        &nbsp;
                        Ubah Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                passLama: {
                    required : true,
                },  
                passBaru: {
                    required : true,
                },
                new_password_confirmation: {
                    required : true,
                },
            },
            messages :{
                passLama: {
                    required : 'Password lama tidak boleh kosong.!',
                }, 
                passBaru: {
                    required : 'Password baru tidak boleh kosong.!',
                },
                new_password_confirmation: {
                    required : 'Field tidak boleh kosong.!',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
@endpush