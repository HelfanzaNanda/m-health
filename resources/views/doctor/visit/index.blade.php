@extends('layouts.doctor')
@section('content')
<div class="patient">
    <div class="container box-shadow bg-white">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink">Kunjungan</div>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-23" style="height: 86vh; overflow: hidden">
        <div class="container-mhealth h-100" >
            <form action="" class="visit h-100">
                @csrf
                <label class="font-weight-500">Tanggal Kunjungan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text bg-white border-pink" 
                        style="border-right: none !important">
                            <img src="{{ asset('images/icon/calendar.png') }}" width="22" height="22">
                        </span>
                    </div>
                    <input type="text" value="27 Maret 2021"
                    class="form-control text-pink text-center font-18px datepicker 
                    font-size-16 form-mhealth" 
                    style="border-left: none !important; border-right: none !important;">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white border-pink" id="basic-addon1"
                        style="border-left: none !important">
                            <img src="{{ asset('images/icon/arrow-down.png') }}" width="22" height="22">
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="font-weight-500">Nama Pasien</label>
                    <input type="text" name="patient_name" id="patient-name" 
                    class="form-control font-size-16 form-mhealth">
                </div>

                <button class="btn bg-dark-pink text-white btn-mhealth btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('.datepicker').datepicker();
    </script>
@endpush
