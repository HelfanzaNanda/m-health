<!doctype html>
<html lang="en">
  @include('layouts._head')
  <body>
    <div class="mt-3">
        <div class="container-mhealth pb-3">
            <div class="row justify-content-center align-items-center mb-5">
                <div class="mr-2">
                    <img src="{{ asset('images/logo/mhealth.png') }}" alt="m-health" width="20">
                </div>
                <div class="text-active-pink font-weight-500 font-size-19"><b>mHealth</b></div>
            </div>
            <div class="mb-3">
                <img src="{{ asset('images/welcome.png') }}" width="378" height="260">
            </div>
            <div class="d-flex flex-column text-center justify-content-center">

                <div class="font-weight-700 font-size-24">Selamat Datang di mHealth !</div>
                <div class="mb-auto"><p class="text-center">Neque tristique bibendum adipiscing nunc, fringilla aliquam aliquet donec habitasse placerat.</p></div>
            </div>
            <div class="d-flex flex-column" style="position: absolute; bottom: 20px; width: 88%;">
                <h6>Saya adalah seorang ... </h6>
                <div class="input-group mb-3">
                    <input type="text" readonly class="bg-white btn-choose-role form-control border-right-none font-size-16 form-mhealth" name="role" id="role" value="Ibu Hamil">
                    <div class="input-group-prepend btn-choose-role">
                        <span class="input-group-text bg-white border-left-none"><i class="fas fa-angle-right"></i></span>
                    </div>
                </div>
                <button class="btn btn-block btn-mhealth btn-pink text-white">Selanjutnya</button>
            </div>
            
        </div>
    </div>

    <div class="modal fade" id="choose-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <div class="block px-3">
                    <div class="row justify-content-between align-items-center">
                        <label class="form-check-label" for="role-pregnant">Ibu Hamil</label>
                        <input type="radio" name="radio-role" checked id="role-pregnant" value="Ibu Hamil">
                    </div>
                </div>
                <hr>
                <div class="block px-3">
                    <div class="row justify-content-between align-items-center">
                        <label class="form-check-label" for="role-doctor">Bidan / Dokter</label>
                        <input type="radio" name="radio-role" id="role-doctor" value="Bidan / Dokter">
                    </div>
                </div>
                <hr>
                <div class="block px-3">
                    <div class="row justify-content-between align-items-center">
                        <label class="form-check-label" for="role-administrator">Pengelola KIA</label>
                        <input type="radio" name="radio-role" id="role-administrator" value="Pengelola KIA">
                    </div>
                </div>
                <hr>
                <div class="block px-3">
                    <div class="row justify-content-between align-items-center">
                        <label class="form-check-label" for="role-office-health">Dinas Kesehatan</label>
                        <input type="radio" name="radio-role" id="role-office-health" value="Dinas Kesehatan">
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    @include('layouts._script')
    <script>
        $('.btn-choose-role').on('click', function() {
            $('#choose-role-modal').modal('show')
        })
        $("input[name=radio-role]").on('change', function(e){
            let value = $(this).val()
            $('#role').val(value)
            $('#choose-role-modal').modal('hide')
        })
    </script>
  </body>
</html>