@extends('layouts.doctor')
@section('content')
<div class="patient">
    <div class="container box-shadow bg-white">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink font-weight-500">Profil Pasien</div>
            </div>
        </div>
    </div>


        <div class="container">
            <div class="card box-shadow mt-3">
                <div class="card-body">
                    <div class="form-group">
                        <label class="profile-patient">Nama</label>
                        <h6>Auristela Allisya</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Tempat, Tanggal Lahir</label>
                        <h6>Jakarta, 20 Mei 1996</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Agama</label>
                        <h6>Islam</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Alamat</label>
                        <h6>Jakarta Utara</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Situasi Keluarga</label>
                        <h6>Bersama Keluarga</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">No. Hp</label>
                        <h6>08123456789</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Pendidikan Terakhir</label>
                        <h6>Magister Ilmu Komputer</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Pekerjaan</label>
                        <h6>Kepala Dinas</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Suku</label>
                        <h6>-</h6>
                    </div>
                    <div class="form-group">
                        <label class="profile-patient">Data Keluarga</label>
                        <h6>-</h6>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@push('scripts')

@endpush
