@extends('layouts.doctor')
@section('content')
    <div class="container box-shadow">
        <div class="shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink">Pasien</div>
            </div>
        </div>
    </div>

    <div class="floating-action text-white text-center">
        <img src="{{ asset('images/icon/floating-add.png') }}" width="26" height="26">
        <i class="fas fa-plus w-100 h-50 fa-lg my-auto"></i>
    </div>
    <div class=" pt-23" style="max-height: 86vh; overflow: auto">
        <div class="container-mhealth ">
            <div class="input-group mb-30">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-pink border-right-none" id="basic-addon1">
                        <img src="{{ asset('images/icon/search.png') }}" width="22" height="22">
                    </span>
                </div>
                <input type="text" 
                class="form-control font-18px datepicker font-size-16 form-mhealth border-left-none" 
                placeholder="Cari Artikel">
            </div>
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="{{ asset('images/profile.png') }}" class="image-chat-responsive">
                </div>
                <div class="col-9 ml-3">
                    <div class="font-weight-500 font-18px block">
                        Auristela Allisya
                    </div>
                    <div class="d-inline-block text-pink font-14">26 Tahun</div>
                </div>
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="{{ asset('images/profile.png') }}" class="image-chat-responsive">
                </div>
                <div class="col-9 ml-3">
                    <div class="font-weight-500 font-18px block">
                        Auristela Allisya
                    </div>
                    <div class="d-inline-block text-pink font-14">26 Tahun</div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    
@endsection
