@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
            <img src="/assets/img/logo.png" alt="logo" class="logo">
        </div>
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
                        <h1 class="total">Rp. 1,000,000</h1>
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
                        <div class="value text-success">Rp. 120,000</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Modal Bulan Ini</div>
                        <div class="value text-danger">Rp. 880,000</div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Total Keuntungan</div>
                        <div class="value">Rp. 465,000</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Total Modal</div>
                        <div class="value">Rp. 12,000,000</div>
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

                <a href="transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="/assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Mas Gendon</strong>
                            <p>Plampang</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-black"> Rp. 700,000</div>
                    </div>
                </a>

                <a href="transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="/assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Kecomel</strong>
                            <p>kecomel</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-black"> Rp. 400,000</div>
                    </div>
                </a>

                <a href="transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="/assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Mas Sahid</strong>
                            <p>Plampang</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-black"> Rp. 100,000</div>
                    </div>
                </a>

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