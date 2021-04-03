<!doctype html>
<html lang="en">
  @include('layouts._head')
  <body>
    <div class="mt-3">
        <div class="container-mhealth" style="overflow: hidden">
            <div class="row mb-4">
                <div class="shadow shadow-lg">
                    <div class="">
                        <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
                    </div>
                    <div class="row justify-content-center w-100" style="position: absolute; top: 15px;">
                        <div class="mr-2">
                            <img src="{{ asset('images/logo/mhealth.png') }}" alt="m-health" width="20">
                        </div>
                        <div class="text-active-pink font-weight-500 font-size-19"><b>mHealth</b></div>
                    </div>
                </div>
            </div>

            <div class="mb-4 text-center">
                <div class="font-size-24 font-weight-700">Daftar</div>
                <p>Ibu sudah punya akun? <a href="" class="text-pink"><u>Masuk</u></a></p>
            </div>

            <form action="" method="POST" class="mb-4">
                @csrf
                <div class="mb-2">
                    <label class="font-weight-500" for="fullname">Nama Lengkap</label>
                    <input type="text" class="form-control bg-form-auth font-size-16 form-mhealth" name="fullname" id="fullname">
                </div>
                <div class="mb-2">
                    <label class="font-weight-500" for="nik">NIK</label>
                    <input type="number" class="form-control bg-form-auth font-size-16 form-mhealth" name="nik" id="nik">
                </div>
                <div class="mb-2">
                    <label class="font-weight-500" for="email">Email</label>
                    <input type="email" class="form-control bg-form-auth font-size-16 form-mhealth" name="email" id="email">
                </div>
                <label class="font-weight-500" for="password">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control bg-form-auth 
                    font-size-16 form-mhealth" 
                    style="border-right: none !important"
                    name="password" id="password">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-form-auth"
                        style="border-left: none !important">
                            <img src="{{ asset('images/icon/hide-password.png') }}" alt="">
                        </span>
                    </div>
                </div>
                <label class="font-weight-500" for="password">Konfirmasi Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control bg-form-auth 
                    font-size-16 form-mhealth" 
                    style="border-right: none !important"
                    name="password" id="password">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-form-auth"
                        style="border-left: none !important">
                            <img src="{{ asset('images/icon/hide-password.png') }}" alt="">
                        </span>
                    </div>
                </div>
                <div class="form-check py-3">
                    <input type="checkbox" class="form-check-input" id="perms">
                    <label class="form-check-label font-size-14" for="perms">
                        Saya menyatakan telah membaca dan menyetujui ketentuan dalam mobile health ini.
                    </label>
                </div>
                <button class="btn bg-dark-pink text-white btn-block" type="submit">Daftar Sekarang</button>
            </form>
        </div>
    </div>
    @include('layouts._script')
  </body>
</html>
