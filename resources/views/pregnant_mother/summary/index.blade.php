@extends('layouts.app')
@section('content')
    <div class="summary-card mb-3">
        <div class="buble buble3"></div>
        <div class="buble buble4"></div>
        <div class="container" style="position: relative">
            <div class="row justify-content-between mx-2 pt-3 mb-4">
                <div class="row">
                    <div class="mr-2 ml-2">
                        <img src="{{ asset('images/logo/mhealth.png') }}" alt="m-health" width="20">
                    </div>
                    <div class="text-white"><b>mHealth</b></div>
                </div>
                <div>
                    <i class="fas fa-comment-dots fa-lg text-white"></i>
                    <i class="fas fa-bell fa-lg text-white"></i>
                </div>
            </div>
            <div class="text-white mt-5">
                <div>Halo,</div>
                <h4 class="d-block font-weight-bold">Auristela Allisya</h4>
            </div>

        </div>
    </div>

    <div class="container">
        <h3 class="px-2">Ringkasan</h3>
        <div class="row mb-2 px-2">
            <div class="col-6 mb-2">
                <div class="card">
                    <div class="card-body rounded text-center bg-success text-white">
                        <h1>127</h1>
                        <h6>Pasien yang Terdaftar</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-2">
                <div class="card">
                    <div class="card-body rounded text-center bg-danger text-white">
                        <h1>49</h1>
                        <h6>Jumlah Pasien Beresiko Tinggi</h6>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body rounded text-center bg-info text-white">
                        <h1>16</h1>
                        <h6>Jumlah Kunjungan Hari Ini</h6>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body rounded text-center bg-warning text-white">
                        <h1>73</h1>
                        <h6>Jumlah Kunjungan Hari ini</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
