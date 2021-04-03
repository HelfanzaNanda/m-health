@extends('layouts.app')
@section('content')
    <div class="container box-shadow">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink font-weight-500">Pemeriksaan Kehamilan</div>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-23 mt-1" style="max-height: 86vh; overflow: hidden">
    <div class="container-mhealth">
        <form action="">
            @csrf
            <div class="form-group">
                <label class="font-weight-500">Kehamilan</label>
                <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
            </div>
            <div class="form-group">
                <label class="font-weight-500">Haid terakhir</label>
                <input type="text" name="" id="" class="datepicker form-control font-size-16 form-mhealth">
            </div>
            <div class="form-group">
                <label class="font-weight-500">Riwayat Haid</label>
                <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
            </div>
            <div class="form-group">
                <label class="font-weight-500">Riwayat kehamilan</label>
                <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
            </div>
            <button class="btn btn-mhealth btn-block btn-pink text-white" type="submit">Simpan</button>
        </form>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.datepicker').datepicker({
            autoclose : true,
            format: 'dd/mm/yyyy'
        });
    </script>
@endpush
