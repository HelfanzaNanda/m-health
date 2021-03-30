@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <div class="container">
            <div class="row mb-3">
                <div class="col-5 mt-1"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto justify-content-center">
                    <div class="row justify-content-center align-items-center mb-5">
                        <div class="mr-2">
                            <img src="{{ asset('images/logo/mhealth.png') }}" alt="m-health" width="20">
                        </div>
                        <div class="text-pink"><b>mHealth</b></div>
                    </div>
                </div>
            </div>

            <div class="card card-image mb-3" style="background-image: url({{ asset('images/women.jpg') }});height: 300px;">

            </div>

            <div class="mb-3 text-center px-4 mb-5">
                <h4>Selamat Datang di mHealt!</h4>
                <p>Neque tristique bibendum adipiscing
                    nunc, fringilla aliquam aliquet donec
                    habitasse placerat.</p>
            </div>
            <form action="" class="px-3">
                <div class="form-group">
                    <label for="">Saya adalah seorang ...</label>
                    <select type="text" name="" id="" class="form-control">
                        <option value="">Bidan / Dokter</option>
                        <option value="">Ibu Hamil</option>
                        <option value="">Pengelola KIA</option>
                        <option value="">Dinas Kesehatan</option>
                    </select>
                </div>
                <button class="btn btn-pink text-white btn-block" type="submit">Masuk Sekarang</button>
            </form>
        </div>
    </div>
@endsection
