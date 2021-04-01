@extends('layouts.doctor')
@section('content')
    <div class="container box-shadow">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Riwayat Kehamilan Sekarang</div>
            </div>
        </div>
    </div>

    <div class="container bg-grey pt-2 mt-2" style="height: 83vh">
        <div class="card">
            <div class="card-body">
                <h5>Riwayat Kehamilan Sekarang</h5>
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
    </div>
@endsection

@push('scripts')

@endpush
