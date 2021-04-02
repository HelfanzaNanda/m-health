@extends('layouts.doctor')
@section('content')
    <div class="container box-shadow">
        <div class="col-12">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Rujukan</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2 mt-3">
        <div class="col-12">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-calendar text-pink"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control datepicker">
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
@endsection

@push('scripts')
    <script>
        $('.datepicker').datepicker({
            autoclose : true,
            format: 'dd/mm/yyyy'
        });
    </script>
@endpush
