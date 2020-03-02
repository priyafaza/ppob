@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
            <img src="/assets/img/logo.png" alt="logo" class="logo">
        </div>
        <div class="right">
            <a href="#" class="headerButton goBack" onclick="document.getElementById('form-logout').submit()">
                <ion-icon name="exit-outline"></ion-icon>
            </a>
        </div>
        <form id="form-logout" method="POST" action="/logout" style="display: none">
            @csrf
        </form>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Total Transaksi Bulan ini</span>
                        <h1 class="total">Rp. {{ number_format($tx_now,0,'.',',') }}</h1>
                    </div>
                </div>
                <!-- * Balance -->
            </div>
        </div>
        <!-- Wallet Card -->
        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Keuntungan Bulan Ini</div>
                        <div class="value text-success">Rp. {{ number_format($profit_now,0,'.',',') }}</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Modal Bulan Ini</div>
                        <div class="value text-danger">Rp. {{ number_format($modal_now,0,'.',',') }}</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Total Keuntungan</div>
                        <div class="value">Rp. {{ number_format($profit_all,0,'.',',') }}</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Total Modal</div>
                        <div class="value">Rp. {{ number_format($modal_all,0,'.',',') }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Stats -->

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">10 Pelanggan Top</h2>
            </div>
            <div class="transactions">

                @foreach($list as $ini)
                    <a href="#" class="item">
                        <div class="detail">
                            <img src="/assets/img/users/{{ \App\Pelanggan::find($ini->id_pelanggan)->foto }}" alt="img" class="image-block imaged w48">
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
        <a href="/home" class="item active">
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