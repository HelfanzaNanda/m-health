<!doctype html>
<html lang="en">
  @include('layouts._head')
  <body>
    <div class="mt-3">
        <div class="container-mhealth">
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
                <div class="font-size-24 font-weight-700">Masuk</div>
                <p>Ibu belum punya akun? <a href="" class="text-pink"><u>Daftar</u></a></p>
            </div>

            <form action="" method="POST" class="mb-4">
                @csrf
                <div class="form-group">
                    <label class="font-weight-500" for="username">Username</label>
                    <input type="text" class="form-control bg-form-auth font-size-16 form-mhealth" 
                    name="username" id="username">
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
                <div class="text-right mb-3"><a href="" class="text-black font-size-14"><u>Forgot Password ?</u></a></div>
                <button class="btn btn-mhealth bg-dark-pink text-white btn-block" type="submit">Masuk Sekarang</button>
            </form>
            <p class="text-center">ibu juga bisa masuk dengan</p>
            <div class="row justify-content-center">
                <div>
                    <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-logos-vector-eps-cdr-svg-download-10.png"
                    alt="Google" width="40">
                </div>
                <div>
                    <img src="https://pngimg.com/uploads/facebook_logos/facebook_logos_PNG19754.png"
                    alt="Facebook" width="40">
                </div>
            </div>
        </div>
    </div>
    @include('layouts._script')
  </body>
</html>
