@extends('backend.layouts.app')

@php
$merek = App\Models\BrandMobil::count();
$mobil = App\Models\Mobil::count();
@endphp

@section('heading')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Halo, Selamat Datang Kembali!</h4>
            <p class="mb-0">{{ auth()->user()->name }}</p>
        </div>
    </div>

    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-6 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <i class="ti-layout-grid2 text-pink border-pink"></i>
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Merek Mobil</div>
                    <div class="stat-digit">{{ $merek }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card">

            <div class="stat-widget-one card-body">
                <div class="stat-icon d-inline-block">
                    <i class="ti-car text-success border-success"></i>
                </div>
                <div class="stat-content d-inline-block">
                    <div class="stat-text">Daftar Mobil</div>
                    <div class="stat-digit">{{ $mobil }}</div>
                </div>
            </div>


        </div>
    </div>

</div>


{{-- <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Fee Collections and Expenses</h4>
            </div>
            <div class="card-body">
                <div class="ct-bar-chart mt-5"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="ct-pie-chart"></div>
            </div>
        </div>
    </div>
</div> --}}

@endsection