@extends('layouts.app')
@section('content')
    <div class="container box-shadow">
        <div class="col-12">
            <div class="row py-3">
                <div class="col-auto"><i class="fas fa-angle-left"></i></div>
                <div class="col-auto text-pink">Edit Profil</div>
            </div>
        </div>
    </div>
    <div class="container bg-grey pt-2 mt-3">
        <div class="col-12">
            <form action="">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="">Tempat, Tanggal Lahir</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Jakarta, 20 Mei 1996">
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <select type="text" name="" id="" class="form-control">
                        <option value="">Islam</option>
                        <option value="">Konghucu</option>
                        <option value="">Budha</option>
                        <option value="">Katholik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea type="text" name="" id="" class="form-control" placeholder="Jakarta Utara"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Situasi Keluarga</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Bersama Keluarga">
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" name="" id="" class="form-control" placeholder="08123456789">
                </div>
                <div class="form-group">
                    <label for="">Pendidikan</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Magister Ilmu Komputer">
                </div>
                <div class="form-group">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Kepala Dinas">
                </div>
                <div class="form-group">
                    <label for="">Suku</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Suku">
                </div>
                <div class="form-group">
                    <label for="">Data Keluarga</label>
                    <input type="text" name="" id="" class="form-control" placeholder="Data Keluarga">
                </div>
                <button class="btn btn-block btn-pink text-white mt-3" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
