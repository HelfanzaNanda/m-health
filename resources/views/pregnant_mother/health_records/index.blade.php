@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Catatan Kesehatan</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2" style="height: 83vh">
        <div class="col-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-calendar text-pink"></i>
                    </span>
                </div>
                <input type="date" class="form-control">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-angle-down" text-pink></i>
                    </span>
                </div>
            </div>

            <div class="tab-content" id="tab-chart">
                <div class="tab-pane fade show active" id="physical" role="tabpanel" aria-labelledby="physical-tab">
                    <div id="chart-physical">aa</div>
                </div>
                <div class="tab-pane fade" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
                    <div id="chart-laboratory">bb</div>
                </div>
            </div>
            <div class="nav topnav col-12" role="tablist">
                <a class="font-weight-bold w-50" href="#physical" data-toggle="tab" class="active">Fisik</a>
                <a class="font-weight-bold w-50" href="#laboratory" data-toggle="tab">Laboratorium</a>
               
              </div>
        </div>

        <div class="col-12">
            <table></table>
        </div>
    </div>
@endsection