@extends('layouts.doctor')
@section('content')
    <div class="summary summary-card mb-3" >
        <div class="buble buble3"></div>
        <div class="buble buble4"></div>
        <div class="container" style="position: relative">
            <div class="row justify-content-between mx-2 pt-3 mb-4">
                {{-- <div class="row">
                    <div class="mr-2 ml-2">
                        <img src="{{ asset('images/logo/logo-white.png') }}" alt="m-health" width="20">
                    </div>
                    <div class="text-white"><b>mHealth</b></div>
                </div> --}}
                <img src="{{ asset('images/logo-text.png') }}" height="31" width="116">
                <div>
                    <img src="{{ asset('images/message.png') }}" height="28" width="28.99" alt="">
                    <img src="{{ asset('images/notification.png') }}" height="25" width="25" alt="">
                </div>
            </div>
            <div class="text-white mt-5">
                <div>Halo,</div>
                <div class="d-block font-weight-800 font-size-25">Auristela Allisya</div>
            </div>

        </div>
    </div>

    <div class="container-mhealth pb-5" style="max-height: 86vh; overflow: hidden">
        <h5 class="font-weight-700 mt-33 mb-14">Ringkasan</h5>
        <div class="d-flex justify-content-between mb-2">
            <div class="h-137 w-177">
                <div class="box-summary rounded bg-green">
                    <div class="card-body text-center text-white">
                        <div class="font-size-55 font-weight-700 line-height-67 mb-8">127</div>
                        <div class="font-14 line-height-17">Pasien Terdaftar</div>
                    </div>
                </div>
            </div>
            <div class="h-137 w-177">
                <div class="box-summary rounded bg-red">
                    <div class="card-body text-center text-white">
                        <div class="font-size-55 font-weight-700 line-height-67 ">49</div>
                        <div class="font-14 line-height-17">Jumlah Pasien Beresiko Tinggi</div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="d-flex justify-content-between mb-2">
            <div class="h-137 w-177">
                <div class="box-summary rounded bg-blue">
                    <div class="card-body text-center text-white">
                        <div class="font-size-55 font-weight-700 line-height-67 ">16</div>
                        <div class="font-14 line-height-17">Jumlah Kunjungan Hari Ini</div>
                    </div>
                </div>
            </div>
            <div class="h-137 w-177">
                <div class="box-summary rounded bg-yellow">
                    <div class="card-body text-center text-white">
                        <div class="font-size-55 font-weight-700 line-height-67 ">73</div>
                        <div class="font-14 line-height-17">Jumlah Kunjungan Hari ini</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
