@extends('layouts.app')
@section('content')
<div class="card card-image" style="position: relative; background-image: url({{ asset('images/women.jpg') }})">
    <div class="col-12 mt-4">
        <div class="d-flex justify-content-between">
            <a href="">
                <img src="{{ asset('images/icon/back-white.png') }}" width="18" height="18">
            </a>
            <a href="">
                <img src="{{ asset('images/icon/share.png') }}" width="18" height="18">
            </a>
        </div>
        
    </div>
    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
      <div class="py-5">
        <span class="bg-light-pink span-category">KEHAMILAN</span>
      </div>
    </div>
</div>
<div class="container-mhealth pb-5" style="max-height: 86vh; overflow: auto">
    <div class="mt-4">
        <div class="font-20 font-weight-700">Kenali tanda-tanda bahaya pada kehamilan</div>
        <h6 class="mt-2 text-smooth-pink font-14 ">11 Jam Yang Lalu</h6>
    </div>
    <hr style="width: 92%">
    <div class="articles mt-3 text-justify">
        <p style="text-indent: 25px">Perubahan yang terjadi pada Bumil sering kali
            menyebabkan rasa tidak nyaman dan badan
            pun terasa sakit. Bumil mungkin pernah
            bertanya-tanya apakah perubahan atau rasa
            sakit yang dialami ini normal atau tidak. Oleh
            karena itu, Bumil sebaiknya selalu waspada
            terhadap berbagai gejala dan tanda kehamilan
            yang perlu diperiksakan.</p>
            <p>Berikut ini adalah beberapa tanda bahaya pada
                kehamilan:</p>
            <h6>1. Perdarahan dari vagina</h6>
            <p style="text-indent: 25px">Perdarahan dikatakan normal jika hanya
                sebatas bercak. Namun, jika volume darah yang
                keluar cukup banyak dan disertai adanya
                gumpalan jaringan, kondisi tersebut bisa
                menjadi tanda bahwa ibu hamil mengalami</p>
    </div>    
</div>

@endsection
