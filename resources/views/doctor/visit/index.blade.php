@extends('layouts.doctor')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Kunjungan</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2" style="height: 83vh">
        <div class="col-12">
            <label for="">Tanggal Kunjungan</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-calendar text-pink"></i>
                    </span>
                </div>
                <input type="text" class="form-control datepicker">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-angle-down" text-pink></i>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="">Nama Pasien</label>
                <input type="text" name="patient_name" id="patient-name" class="form-control">
            </div>

            <button class="btn btn-pink btn-block">Simpan</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.datepicker').datepicker();
    </script>
@endpush