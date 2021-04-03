@extends('layouts.doctor')
@section('content')
    <div class="container box-shadow">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink font-weight-500">Profil Pasien</div>
            </div>
        </div>
    </div>

    <div class="container pt-2 mt-2">
        <div class="card profile-patient-card">
            <div class="card-body">
                <div class="container" style="position: relative">
                    <div class="row">
                        <div class="thumb-lg member-thumb mx-auto">
                            <img src="{{ asset('images/profile.png') }}" alt="profile-image">
                        </div>
                    </div>
                    <div class="text-white text-center mt-3">
                        <h2>Auristela Allisya</h2>
                        <h5 style="color: #FFB4B4">24 Tahun</h5>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-block btn-profile">Identitas Anda</button>
                        <button type="button" class="btn btn-block btn-profile">Riwayat Kehamilan Sekarang</button>
                        <button type="button" class="btn btn-block btn-profile">Riwayat Kontrasepsi</button>
                        <button type="button" class="btn btn-block btn-profile">Riwayat Kehamilan Sebelumnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
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

@push('scripts')

@endpush
