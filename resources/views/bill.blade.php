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
                <!-- item -->
                <a href="bill-detail.html" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Mas Gendon</strong>
                            <p>12 Transaksi</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> Rp. 880,000</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="bill-detail.html" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Mas Sahid</strong>
                            <p>2 Transaksi</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> Rp. 80,000</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="bill-detail.html" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Kecomel</strong>
                            <p>1 Transaksi</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> Rp. 50,000</div>
                    </div>
                </a>
                <!-- * item -->
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