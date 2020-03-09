@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
            Tagihan buat Pelanggan
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="transactions">

                @foreach($list as $ini)
                <a href="/bill/{{ $ini->id_pelanggan }}" class="item">
                    <div class="detail">
                        @if($ini->id >3)
                            <img src="{{ \App\Pelanggan::find($ini->id_pelanggan)->foto }}" alt="img" class="image-block imaged w48">
                        @else
                            <img src="/assets/img/users/{{ \App\Pelanggan::find($ini->id_pelanggan)->foto }}" alt="img" class="image-block imaged w48">
                        @endif
                        <div>
                            <strong>{{ \App\Pelanggan::find($ini->id_pelanggan)->username }}</strong>
                            <p>{{ $ini->transaksi }} Transaksi</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> Rp. {{ number_format($ini->harga,0,'.',',') }}</div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
        <!-- * Transactions -->

    </div>
    <!-- * App Capsule -->
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="/home" class="item">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="/bill" class="item active">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Tagihan</strong>
            </div>
        </a>
        <a href="/transaction" class="item">
            <div class="col">
                <ion-icon name="receipt-outline"></ion-icon>
                <strong>Transaction</strong>
            </div>
        </a>
        <a href="/product" class="item">
            <div class="col">
                <ion-icon name="cube-outline"></ion-icon>
                <strong>Produk</strong>
            </div>
        </a>
        <a href="/users" class="item">
            <div class="col">
                <ion-icon name="people-outline"></ion-icon>
                <strong>Pelanggan</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->
@stop