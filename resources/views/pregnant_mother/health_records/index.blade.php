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
                <input type="date" class="form-control datepicker">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-angle-down" text-pink></i>
                    </span>
                </div>
            </div>

            <div class="img mt-2">
                <img src="{{ asset('images/chart.png') }}" alt="" height="150px" width="310px">
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
            <h5 class="py-3">Catatan Kesehatan</h5>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
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
            autoclose : true,
            format: 'dd/mm/yyyy'
        });
    </script>
@endpush
