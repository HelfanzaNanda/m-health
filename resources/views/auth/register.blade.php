@extends('layouts.app')
@section('content')
    
@endsection

<!doctype html>
<html lang="en">
  @include('layouts._head')
  <body>
    <div class="mt-3">

        <div class="container">
            <div class="row mb-3">
                <div class="col-5 mt-1"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto justify-content-center">
                    <div class="row justify-content-center align-items-center mb-5">
                        <div class="mr-2">
                            <img src="{{ asset('images/logo/mhealth.png') }}" alt="m-health" width="20">
                        </div>
                        <div class="text-pink"><b>mHealth</b></div>
                    </div>
                </div>
            </div>

            <div class="mb-3 text-center">
                <h4>Daftar</h4>
                <p>Ibu sudah punya akun? <a href="" class="text-pink"><u>Masuk</u></a></p>
            </div>

            <form action="" method="POST" class="mb-4">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold" for="fullname">Nama Lnegkap</label>
                    <input type="text" class="form-control" name="fullname" id="fullname">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="nik">NIK</label>
                    <input type="number" class="form-control" name="nik" id="nik">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <label class="font-weight-bold" for="password">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>
                <label class="font-weight-bold" for="password">Konfirmasi Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="confirmation_password" id="confirmation-password">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>
                <div class="form-check my-2">
                    <input type="checkbox" class="form-check-input" id="perms">
                    <label class="form-check-label" for="perms">
                        Saya menyatakan telah membaca dan menyetujui ketentuan dalam mobile health ini.
                    </label>
                </div>
                <button class="btn btn-pink text-white btn-block" type="submit">Daftar Sekarang</button>
            </form>
        </div>
    </div>
    @include('layouts._script')
  </body>
</html>