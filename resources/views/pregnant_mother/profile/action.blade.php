@extends('layouts.app')
@section('content')
<div class="container box-shadow">
    <div class="py-3">
        <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
    </div>
    <div class="row justify-content-center">
        <div class="text-header font-size-18 text-active-pink">Tindakan</div>
    </div>
</div>
<div class="bg-grey">
    <div class="container-mhealth mt-4">
        <form action="">
            @csrf
            <div class="card">
                
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-check">
                        <input class="font-size-16 form-mhealth form-check-input " type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                        Imunisasi TT
                        </label>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-check">
                        <input class="font-size-16 form-mhealth form-check-input " type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">
                        Tablet Tambah Darah
                        </label>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-check">
                        <input class="font-size-16 form-mhealth form-check-input " type="checkbox" value="" id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3">
                        Konseling
                        </label>
                    </div>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="form-check">
                        <input class="font-size-16 form-mhealth form-check-input " type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">
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
