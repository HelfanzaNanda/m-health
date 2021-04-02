@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink">Telekonsultasi</div>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-23" style="height: 87vh">
        <div class="container-mhealth h-100">
            <div class="row h-100 mx-1 align-items-end">
                <div class="input-group mb-3">
                    <input type="text" 
                    class="form-control font-18px font-size-16 form-mhealth border-right-none" 
                    placeholder="Tulis pesan anda ...">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white border-pink border-left-none" id="basic-addon1">
                            <img src="{{ asset('images/icon/send-button.png') }}" width="23" height="23">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection