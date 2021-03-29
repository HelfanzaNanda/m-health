@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Pendidikan Kesehatan</div>
            </div>
        </div>
    </div>

    <div class="container bg-grey pt-2" style="height: 83vh">
        <div class="col-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search text-pink"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Cari Artikel">
            </div>

            <ul class="nav flex-nowrap " style="overflow-x: auto;">
                <li class="nav-item">
                    <a class="nav-link text-light-pink active" data-toggle="tab" href="#recommended">Rekomendasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light-pink" data-toggle="tab" href="#pregnant">Kehamilan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light-pink" data-toggle="tab" href="#test">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light-pink" data-toggle="tab" href="#health">kesehatan</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane container active" id="recommended">
                    <hr>
                    <div class="row">
                        <div class="col-3 mr-4">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650"
                                class="image-responsive">
                        </div>
                        <div class="col-8">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-bold font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="tab-pane container fade" id="pregnant">
                    <hr>
                    <div class="row">
                        <div class="col-3 mr-4">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650"
                                class="image-responsive">
                        </div>
                        <div class="col-8">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-bold font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 mr-4">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650"
                                class="image-responsive">
                        </div>
                        <div class="col-8">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-bold font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="tab-pane container fade" id="test">
                    <hr>
                    <div class="row">
                        <div class="col-3 mr-4">
                            <img src="https://akcdn.detik.net.id/visual/2019/09/18/fef8eda8-9c35-4d7d-ad09-058ba2b8d032_169.jpeg?w=650"
                                class="image-responsive">
                        </div>
                        <div class="col-8">
                            <div class="text-pink d-inline-block">KEHAMILAN</div>
                            <div class="font-weight-bold font-18px d-inline-block">
                                Kenali tanda - tanda pada kehamilan
                            </div>
                            <div class="d-inline-block" style="color: #BBBBBB">11 Jam yang lalu</div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="tab-pane container fade" id="health">
                    
                </div>
            </div>
        </div>
    </div>
@endsection
