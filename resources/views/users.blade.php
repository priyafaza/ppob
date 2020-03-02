@extends('layouts.app')
@section('content')

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="pageTitle">
            Pelanggan Saya
        </div>
        <div class="right">
            {{--<a href="javascript:;" class="headerButton">--}}
                {{--<ion-icon name="add-outline"></ion-icon>--}}
            {{--</a>--}}
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section tab-content mt-2 mb-1">

            <!-- waiting tab -->
            <div class="tab-pane fade show active" id="waiting" role="tabpanel">
                <div class="row">
                    @foreach($users as $user)
                    <div class="col-6 mb-2">
                        <div class="bill-box" style="background: {{ $user->status == \App\Pelanggan::STATUS_ACTIVE?'#fff':'#ddd' }}">
                            <div class="img-wrapper">
                                <img src="/assets/img/users/{{ $user->foto }}" alt="img" class="image-block imaged" style="width: 100%; height: auto;">
                            </div>
                            <div class="price">{{ $user->username }}</div>
                            <p>{{ $user->nama }}, {{ $user->alamat }}</p>
                            @if($user->status == \App\Pelanggan::STATUS_ACTIVE)
                                <form action="/users/off/{{ $user->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block btn-sm">Blokir</button>
                                </form>
                            @else
                                <form action="/users/on/{{ $user->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-block btn-sm">Aktifkan</button>
                                </form>
                            @endif

                            <a style="margin-top: 10px" href="https://api.whatsapp.com/send?phone={{ $user->no_hp }}" class="btn btn-primary btn-block btn-sm">Hubungi</a>
                        </div>
                    </div>
                    @endforeach
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
