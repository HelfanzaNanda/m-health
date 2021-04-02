@extends('layouts.app')
@section('content')
    <div class="profile-card mb-3">
        <div class="container" style="position: relative">
            <div class="text-white mt-5 mb-4" style="position: relative;">
                <h4 class="d-block font-weight-bold text-center">Profile</h4>
            </div>
            <div class="row">
                <div class="thumb-lg member-thumb mx-auto">
                    <img src="{{ asset('images/icon/profil.png') }}" alt="profile-image">
                </div>
            </div>
            <div class="text-white text-center mt-3">
                <h2>Auristela Allisya</h2>
                <h5 style="color: #eeeeee">24 Tahun</h5>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-block btn-profile">Identitas Anda</button>
                <button type="button" class="btn btn-block btn-profile">Riwayat Kehamilan Sekarang</button>
                <button type="button" class="btn btn-block btn-profile">Riwayat Kontrasepsi</button>
                <button type="button" class="btn btn-block btn-profile">Riwayat Kehamilan Sebelumnya</button>
            </div>


        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black">Pemeriksaan Fisik <i class="fa fa-angle-right float-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black">Pemeriksaan Lab<i class="fa fa-angle-right float-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black">Tindakan<i class="fa fa-angle-right float-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black">Rujukan<i class="fa fa-angle-right float-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
