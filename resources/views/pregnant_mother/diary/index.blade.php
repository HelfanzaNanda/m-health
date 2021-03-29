@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Diary Ibu Hamil</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2" style="height: 83vh">
        <div class="col-12">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="">Apa yang ibu rasakan hari ini ?</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Apa yang ibu makan dan minum hari ini ?</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Apakah ibu sudah minum obat / vitamin hari ini ?</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Bagaimana kondisi janin ibu hari ini ?</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <button class="btn btn-block btn-pink text-white" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection