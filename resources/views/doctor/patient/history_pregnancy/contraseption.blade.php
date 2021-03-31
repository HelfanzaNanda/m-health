@extends('layouts.doctor')
@section('content')
    <div class="container box-shadow">
        <div class="col-12 shadow shadow-lg">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Riwayat Kontrasepsi</div>
            </div>
        </div>
    </div>

    <div class="container bg-grey pt-2 mt-2" style="height: 83vh">
        <div class="card">
            <div class="card-body">
                <h5>Riwayat Kontrasepsi</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
