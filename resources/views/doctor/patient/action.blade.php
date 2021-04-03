@extends('layouts.doctor')
@section('content')
<div class="patient">
    <div class="container box-shadow bg-white">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink font-weight-500">Tindakan</div>
            </div>
        </div>
    </div>
        <div class="container mt-4">
            <form action="">
                @csrf
                <div class="card mb-3 card-action">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label font-weight-bold" for="flexCheckDefault1">
                            Imunisasi TT
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 card-action">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label font-weight-bold" for="flexCheckDefault2">
                            Tablet Tambah Darah
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 card-action">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label font-weight-bold" for="flexCheckDefault3">
                            Konseling
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card mb-5 card-action">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                            <label class="form-check-label font-weight-bold" for="flexCheckDefault4">
                            Rujukan
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-block btn-pink text-white" type="submit">Simpan</button>
            </form>
        </div>
</div>
@endsection
