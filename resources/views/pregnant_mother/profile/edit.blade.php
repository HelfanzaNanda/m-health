@extends('layouts.app')
@section('content')
    <div class="container box-shadow">
        <div class="py-3">
            <img src="{{ asset('images/icon/back.png') }}" width="18" height="18">
        </div>
        <div class="row justify-content-center">
            <div class="text-header font-size-18 text-active-pink font-weight-500">Edit Profil</div>
        </div>
    </div>
    <div class="pb-3 bg-grey mt-1" style="max-height: 86vh; overflow: auto">
        <div class="container-mhealth pt-2">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="">Tempat, Tanggal Lahir</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Jakarta, 20 Mei 1996">
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <select name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" style="height: 51px !important">
                        <option value="">Islam</option>
                        <option value="">Konghucu</option>
                        <option value="">Budha</option>
                        <option value="">Katholik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Jakarta Utara"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Situasi Keluarga</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Bersama Keluarga">
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="08123456789">
                </div>
                <div class="form-group">
                    <label for="">Pendidikan</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Magister Ilmu Komputer">
                </div>
                <div class="form-group">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Kepala Dinas">
                </div>
                <div class="form-group">
                    <label for="">Suku</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Suku">
                </div>
                <div class="form-group">
                    <label for="">Data Keluarga</label>
                    <input type="text" name="" id="" class="form-control bg-form-auth font-size-16 form-mhealth" placeholder="Data Keluarga">
                </div>
                <button class="btn btn-block btn-mhealth btn-pink text-white mt-3" type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>

@endsection
