@extends('layouts.app')
@section('content')
    <div class="container box-shadow" style="height: 60px">
        <div class="col-12 shadow shadow-lg">
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink font-weight-500">Pendidikan Kesehatan</div>
            </div>
        </div>
    </div>

    <div class="bg-grey pt-23" style="max-height: 86vh; overflow: auto">
        <div class="container-mhealth ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-pink border-right-none" id="basic-addon1">
                        <img src="{{ asset('images/icon/search.png') }}" width="22" height="22">
                    </span>
                </div>
                <input type="text" class="form-control font-18px datepicker font-size-16 form-mhealth border-left-none"
                placeholder="Cari Artikel">
            </div>

            <ul class="nav justify-content-start flex-nowrap " style="overflow-x: auto;">
                <li class="nav-item">
                    <a class="nav-link text-nowrap text-light-pink active" data-toggle="tab" href="#recommended">Rekomendasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nowrap text-light-pink" data-toggle="tab" href="#pregnant">Kehamilan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nowrap text-light-pink" data-toggle="tab" href="#test">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nowrap text-light-pink" data-toggle="tab" href="#health">kesehatan</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="recommended">
                    <hr>
                    <div class="d-flex">
                        <div class="mr-19 h-94 w-94 d-inline-block">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650" class="rounded-4" width="94" height="94">
                        </div>
                        <div class="w-251 d-inline-block">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-500 line-height-23 font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block font-14" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pregnant">
                    <hr>
                    <div class="d-flex">
                        <div class="mr-19 h-94 w-94 d-inline-block">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650" class="rounded-4" width="94" height="94">
                        </div>
                        <div class="w-251 d-inline-block">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-500 line-height-23 font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block font-14" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="mr-19 h-94 w-94 d-inline-block">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650" class="rounded-4" width="94" height="94">
                        </div>
                        <div class="w-251 d-inline-block">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-500 line-height-23 font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block font-14" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="test">
                    <hr>
                    <div class="d-flex">
                        <div class="mr-19 h-94 w-94 d-inline-block">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650" class="rounded-4" width="94" height="94">
                        </div>
                        <div class="w-251 d-inline-block">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-500 line-height-23 font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block font-14" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="health">

                </div>
            </div>
        </div>
    </div>
@endsection
