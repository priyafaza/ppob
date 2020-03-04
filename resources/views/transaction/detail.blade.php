@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="/transaction" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Detail Transaksi
        </div>
        <div class="right">
            <a href="#" onclick="document.getElementById('form-delete').submit()" class="headerButton">
                <ion-icon name="trash-outline"></ion-icon>
            </a>
        </div>
        <form id="form-delete" action="/transaction/delete/{id}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 mb-2">


            <div class="listed-detail mt-3">
                <div class="icon-wrapper">
                    <img src="/assets/img/product/{{ \App\Product::find($transaksi->id_product)->logo }}" alt="img" class="imaged w48">
                </div>
                <h3 class="text-center mt-2">{{ \App\Product::find($transaksi->id_product)->nama }} {{ number_format($transaksi->nominal,0,'.',',') }} <br>{{ $transaksi->deskripsi }}</h3>
            </div>

            <ul class="listview flush transparent simple-listview no-space mt-3">
                <li>
                    <strong>Status</strong>
                    @if($transaksi->status == \App\Transaksi::STATUS_LUNAS)
                        <span class="text-success">Lunas</span>
                    @else
                        <span class="text-warning">Bon</span>
                    @endif

                </li>
                <li>
                    <strong>Tujuan</strong>
                    <span>{{ $transaksi->deskripsi }}</span>
                </li>
                <li>
                    <strong>Nominal</strong>
                    <span>Rp. {{ number_format($transaksi->nominal,0,'.',',') }}</span>
                </li>
                <li>
                    <strong>Harga Beli</strong>
                    <span>Rp. {{ number_format($transaksi->harga_beli,0,'.',',') }}</span>
                </li>
                <li>
                    <strong>Date</strong>
                    <span>{{ $transaksi->created_at->format('d F Y, H:i:s') }}</span>
                </li>
                <li>
                    <strong>Harga Jual</strong>
                    <h3 class="text-bold">Rp. {{ number_format($transaksi->harga_jual,0,'.',',') }}</h3>
                </li>
            </ul>


        </div>

    </div>
    <!-- * App Capsule -->
@stop