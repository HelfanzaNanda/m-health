@extends('layouts.app')
@section('content')
    <div class="home-card mb-3">
        <div class="buble buble1"></div>
        <div class="buble buble2"></div>
        <div class="container" style="position: relative">
            <div class="row justify-content-between mx-2 pt-3 mb-4">
                <div class="row">
                    <div class="mr-2 ml-2">
                        <img src="{{ asset('images/logo/mhealth.png') }}" alt="m-health" width="20">
                    </div>
                    <div class="text-white"><b>mHealth</b></div>
                </div>
                <div><i class="fas fa-bell fa-lg text-white"></i></div>
            </div>
            <div class="text-white mb-4" style="position: relative;">
                <div>Halo ibu,</div>
                <h4 class="d-block font-weight-bold">Auristela Allisya</h4>
            </div>
           

            <div class="card card-home mx-3">
                <div class="card-body shadow text-center" style="height: 150px">
                    <h6>Resiko Kehamilan</h6>
                    <div class="row justify-content-center mb-2">
                        <div class="col-auto">
                            <div class="text-red px-2 font-40px font-weight-bold border border-danger">TINGGI</div>
                        </div>
                    </div>
                    <p class="text-red text-card-top d-sm-inline-block">Anda memiliki resiko tinggi terhadap kesehatan ibu dan janin,
                        konsultasi secara rutin apabila diperlukan
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-2">
            <div class="col-3">
                <div class="card">
                    <div class="card-body rounded text-center bg-success"> <i class="fas fa-book-open fa-2x text-white"></i> </div>
                </div>
                <p class="text-center font-xs">Diary ibu hamil</p>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body rounded text-center bg-info"> <i class="fas fa-baby fa-2x text-white"></i> </div>
                </div>
                <p class="text-center font-xs">Pemeriksaan Kehamilan</p>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body rounded text-center bg-danger"> <i class="fas fa-list-ul fa-2x text-white"></i> </div>
                </div>
                <p class="text-center font-xs">Catatan Kesehatan</p>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body rounded text-center bg-warning"> <i class="fas fa-user-md fa-2x text-white"></i> </div>
                </div>
                <p class="text-center font-xs">Telekonsultasi</p>
            </div>
        </div>

        <h4 class="font-weight-bold">Untuk ibu ketahui</h4>

        <hr>
        <div class="row">
            <div class="col-3">
                <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650" class="image-responsive">
            </div>
            <div class="col-9">
                <div class="text-pink d-inline-block">KEHAMILAN</div>
                <div class="font-weight-bold font-18px d-inline-block">
                    Kenali tanda - tanda pada kehamilan
                </div>
                <div class="d-inline-block" style="color: #BBBBBB">11 Jam yang lalu</div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650" class="image-responsive">
            </div>
            <div class="col-9">
                <div class="text-pink d-inline-block">KEHAMILAN</div>
                <div class="font-weight-bold font-18px d-inline-block">
                    Kenali tanda - tanda pada kehamilan
                </div>
                <div class="d-inline-block" style="color: #BBBBBB">11 Jam yang lalu</div>
            </div>
        </div>
        <hr>
    </div>
@endsection