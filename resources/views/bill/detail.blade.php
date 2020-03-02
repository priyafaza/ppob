@extends('layouts.app')
@section('content')
    <div class="appHeader">
        <div class="left">
            <a href="/bill" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Detail Tagihan
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 mb-2">


            <div class="listed-detail mt-3">
                <div class="icon-wrapper">
                    <img src="/assets/img/users/{{ $pelanggan->foto }}" alt="img" class="imaged" style="width: 150px; height: auto;">
                </div>
                <h3 class="text-center mt-2">{{ $pelanggan->username }}</h3>
            </div>

            <ul class="listview flush transparent simple-listview no-space mt-3">
                <li>
                    <strong>Nama</strong>
                    <span>{{ $pelanggan->nama }}</span>
                </li>
                <li>
                    <strong>Alamat</strong>
                    <span>{{ $pelanggan->alamat }}</span>
                </li>
                <li>
                    <strong>No Hp</strong>
                    <span><a href="https://wa.me/{{ $pelanggan->no_hp}}">+ {{ $pelanggan->no_hp }}</a></span>
                </li>
                <li>
                    <strong>Total Transaksi</strong>
                    <span>{{ $jumlah }}</span>
                </li>
                <li>
                    <strong>Total Tagihan</strong>
                    <h3 class="m-0">Rp. {{ number_format($total,0,'.',',') }}</h3>
                </li>
            </ul>


        </div>

        <div class="section mt-2 mb-2">
            <form action="/bill/{{ $pelanggan->id }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary btn-block btn-lg">Bayar</button>
            </form>
        </div>

    </div>
@stop
