@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Pemeriksaan Kehamilan</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2" style="height: 83vh">
        <div class="col-12">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="">Kehamilan</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Haid terakhir</label>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Riwayat Haid</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Riwayat kehamilan</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <button class="btn btn-block btn-pink text-white" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection