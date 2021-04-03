@extends('layouts.app')
@section('content')
    <div class="container box-shadow">
        <div class="col-12 shadow shadow-lg">
            <div class="py-3">
                <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
            </div>
            <div class="row justify-content-center">
                <div class="text-header font-size-18 text-active-pink">Catatan Kesehatan</div>
            </div>
        </div>
    </div>
    <div class="bg-grey pt-23 mt-1" style="max-height: 86vh; overflow: auto">
        <div class="container-mhealth ">
            <div class="input-group mb-3">
                <div class="input-group-prepend ">
                    <span class="input-group-text bg-white border-pink border-right-none" id="basic-addon1">
                        <img src="{{ asset('images/icon/calendar.png') }}" width="22" height="22">
                        {{-- <i class="fas fa-calendar text-pink"></i> --}}
                    </span>
                </div>
                <input type="text" value="27 Maret 2021"
                class="form-control text-pink text-center font-18px datepicker font-size-16 form-mhealth border-right-none border-left-none">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-pink border-left-none" id="basic-addon1">
                        <img src="{{ asset('images/icon/arrow-down.png') }}" width="22" height="22">
                    </span>
                </div>
            </div>

            <div class="tab-content" id="tab-chart">
                <div class="tab-pane fade show active" id="physical" role="tabpanel" aria-labelledby="physical-tab">
                    <div id="chart-physical" class="chart" style="height: 147px;"></div>
                </div>
                <div class="tab-pane fade show" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
                    <div id="chart-laboratory" class="chart" style="height: 147px;"></div>
                </div>
            </div>
            <div class="nav topnav col-12" role="tablist">
                <a class="font-weight-500 w-50 active" href="#physical" data-toggle="tab">Fisik</a>
                <a class="font-weight-500 w-50" href="#laboratory" data-toggle="tab">Laboratorium</a>
            </div>

            <h5 class="py-3">Catatan Kesehatan</h5>
            <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Dokter</th>
                        <th>Nama Pasien</th>
                        <th>Rumah Sakit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy'
        });

    </script>
@endpush
