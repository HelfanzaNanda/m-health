@extends('layouts.doctor')
@section('content')
    <div class="container box-shadow">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Profil</div>
            </div>
        </div>
    </div>

    <div class="container pt-2 mt-2">
        <div class="card profile-doctor-card">
            <div class="card-body">
                <div class="container" style="position: relative">
                    <div class="text-white mb-4" style="position: relative;">
                        <h4 class="d-block font-weight-bold text-center">Profile</h4>
                    </div>
                    <div class="row">
                        <div class="thumb-lg member-thumb mx-auto">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-thumbnail" alt="profile-image">
                        </div>
                    </div>
                    <div class="text-white text-center mt-3">
                        <h2>Auristela Allisya</h2>
                        <h5 class="text-grey">Bidan</h5>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-block btn-profile">Identitas Anda</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
