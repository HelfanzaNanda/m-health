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
                <h4>Masuk</h4>
                <p>Ibu belum punya akun? <a href="" class="text-pink"><u>Daftar</u></a></p>
            </div>
        
            <form action="" method="POST" class="mb-4">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold" for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <label class="font-weight-bold" for="password">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>
                <div class="text-right mb-2"><a href="">Forgot Password ?</a></div>
                <button class="btn btn-pink text-white btn-block" type="submit">Masuk Sekarang</button>
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