@extends('layouts.app')
@section('content')

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
            Pelanggan Saya
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section tab-content mt-2 mb-1">

            <!-- waiting tab -->
            <div class="tab-pane fade show active" id="waiting" role="tabpanel">
                <div class="row">
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged" style="width: 100%; height: auto;">
                            </div>
                            <div class="price">Mas gendon</div>
                            <p>Bambang Susanto, PlampangRejo</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">Blokir</a>
                            <a href="#" class="btn btn-success btn-block btn-sm">Hubungi</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- * waiting tab -->

        </div>

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
        <a href="/users" class="item active">
            <div class="col">
                <ion-icon name="people-outline"></ion-icon>
                <strong>Pelanggan</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->
@stop