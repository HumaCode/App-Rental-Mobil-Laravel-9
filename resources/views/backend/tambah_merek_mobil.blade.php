@extends('backend.layouts.app')


@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Tambah Merek / Brand</h5>
            </div>
            <form id="myForm" action="{{ route('store.merek') }}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="text" class="form-control input-rounded" name="merek">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>
                        &nbsp; Tambah Data</button>
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
                merek: {
                    required : true,
                },  
                
            },
            messages :{
                merek: {
                    required : 'Merek mobil tidak boleh kosong.!',
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