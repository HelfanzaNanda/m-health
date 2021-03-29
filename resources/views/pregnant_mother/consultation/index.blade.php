@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Telekonsultasi</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2" style="height: 83vh">
        <div class="row h-100 mx-1 align-items-end">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tulis pesan anda ...">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-paper-plane text-pink"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection