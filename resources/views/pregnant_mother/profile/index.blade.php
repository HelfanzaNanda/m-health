@extends('layouts.app')
@section('content')
    <div class="profile-card mb-3">
        <div class="container-mhealth">
            <div class="col-12 shadow shadow-lg">
                <div class="row justify-content-center">
                    <div class="text-header font-size-18 font-weight-500 text-white">Profil</div>
                </div>
            </div>
            <div class="row mt-62 mb-20">
                <div class="thumb-lg mx-auto">
                    <img src="{{ asset('images/profile.png') }}" alt="profile-image" width="120" height="120">
                </div>
            </div>
            <div class="text-white text-center mt-3 mb-29">
                <div class="font-size-24 font-weight-700">Auristela Allisya</div>
                <div class="text-pink font-size-18">24 Tahun</div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-block btn-profile bg-pink-2 border-white text-white font-weight-500">Identitas Anda</button>
                <button type="button" class="btn btn-block btn-profile bg-white text-active-pink font-weight-500">Riwayat Kehamilan Sekarang</button>
                <button type="button" class="btn btn-block btn-profile bg-white text-active-pink font-weight-500">Riwayat Kontrasepsi</button>
                <button type="button" class="btn btn-block btn-profile bg-white text-active-pink font-weight-500">Riwayat Kehamilan Sebelumnya</button>
            </div>


        </div>
    </div>

    <div class="container" style="max-height: 86vh; overflow: auto">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black" class="font-weight-bold">Pemeriksaan Fisik <img src="{{ asset('images/next.png') }}" class="float-right"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black" class="font-weight-bold">Pemeriksaan Lab <img src="{{ asset('images/next.png') }}" class="float-right"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black" class="font-weight-bold">Tindakan <img src="{{ asset('images/next.png') }}" class="float-right"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                        <a href="#" style="color: black" class="font-weight-bold">Rujukan <img src="{{ asset('images/next.png') }}" class="float-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
