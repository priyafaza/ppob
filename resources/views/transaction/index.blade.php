@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
            Transaksi
        </div>
        <div class="right">
            <a href="/transaction-create" class="headerButton">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="transactions">
                @foreach($transactions as $transaksi)
                <a href="/transaction/{{ $transaksi->id }}" class="item">
                    <div class="detail">
                        <img src="/assets/img/product/{{ $transaksi->id_product }}.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>{{ \App\Product::find($transaksi->id_product)->nama }} {{ number_format($transaksi->nominal, 0,'.',',') }}</strong>
                            <p>{{ \App\Pelanggan::find($transaksi->id_pelanggan)->username }}</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-dark"> Rp. {{ number_format($transaksi->harga_jual, 0,'.',',') }}</div>
                        @if($transaksi->status == \App\Transaksi::STATUS_LUNAS)
                            <span class="badge badge-success">Lunas</span>
                        @else
                            <span class="badge badge-warning">Bon</span>
                        @endif
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
        <a href="/bill" class="item">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Tagihan</strong>
            </div>
        </a>
        <a href="/transaction" class="item active">
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