@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink">Diary Ibu Hamil</div>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-23" style="height: 100vh">
        <div class="container-mhealth " >
            <form action="">
                @csrf
                <div class="form-group">
                    <label class="font-weight-500">Apa yang ibu rasakan hari ini ?</label>
                    <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
                </div>
                <div class="form-group">
                    <label class="font-weight-500">Apa yang ibu makan dan minum hari ini ?</label>
                    <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
                </div>
                <div class="form-group">
                    <label class="font-weight-500">Apakah ibu sudah minum obat / vitamin hari ini ?</label>
                    <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
                </div>
                <div class="form-group">
                    <label class="font-weight-500">Bagaimana kondisi janin ibu hari ini ?</label>
                    <input type="text" name="" id="" class="form-control font-size-16 form-mhealth">
                </div>
                <button class="btn btn-mhealth btn-block btn-pink text-white" type="submit">Simpan</button>
            </form>
        </div>
    </div>
   
@endsection