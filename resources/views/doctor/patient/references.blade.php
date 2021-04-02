@extends('layouts.doctor')
@section('content')
<div class="patient">
    <div class="container box-shadow bg-white">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink">Rujukan</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2 mt-3">
        <div class="col-12">
            <form action="" class="references">
                @csrf
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <div class="input-group">
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
                </div>
                <div class="form-group">
                    <label for="">Nama Pasien</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="">Nomor Surat</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                    <label for="">Tujuan</label>
                    <input type="text" name="" id="" class="form-control" placeholder="RS Tujuan">
                </div>
                <button class="btn btn-block btn-pink text-white mt-3" type="submit">Simpan</button>
            </form>
        </div>
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
