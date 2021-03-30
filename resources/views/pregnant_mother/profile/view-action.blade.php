@extends('layouts.app')
@section('content')
<div class="container box-shadow">
    <div class="col-12">
        <div class="row py-3">
            <div class="col-auto"><i class="fas fa-angle-left"></i></div>
            <div class="col-auto text-pink">Tindakan</div>
        </div>
</div>
</div>
<div class="bg-grey">
    <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                        Imunisasi TT
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input active" type="checkbox" value="" id="flexCheckDefault2" disabled>
                        <label class="form-check-label" for="flexCheckDefault2">
                        Konseling
                        </label>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
