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
    <div class="container bg-grey pt-2 mt-3">
        <div class="col-12">
            <form action="" class="visit">
                @csrf
                <label for="">Tanggal Kunjungan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white" id="basic-addon1">
                            <i class="fas fa-calendar text-pink"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control datepicker" placeholder="27 Maret 2021">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white" id="basic-addon1">
                            <i class="fas fa-angle-down" text-pink></i>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Nama Pasien</label>
                    <input type="text" name="patient_name" id="patient-name" class="form-control">
                </div>

                <button class="btn btn-pink btn-block">Simpan</button>
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
