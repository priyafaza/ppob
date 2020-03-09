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
                    @if($pelanggan->id > 3)
                    <img src="{{ $pelanggan->foto }}" alt="img" class="imaged" style="width: 150px; height: auto;">
                    @else
                    <img src="/assets/img/users/{{ $pelanggan->foto }}" alt="img" class="imaged" style="width: 150px; height: auto;">
                    @endif
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
                    <span><a href="https://api.whatsapp.com/send?phone={{ $pelanggan->no_hp}}">+{{ $pelanggan->no_hp }}</a></span>
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
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sudah di Bayar</button>
            </form>
        </div>

        <div class="section mt-2 mb-2">
            <a href="https://api.whatsapp.com/send?phone={{ $pelanggan->no_hp}}&text=Halo {{ $pelanggan->username }},%0ASekedar mengingatkan bahwa per tanggal {{ now()->format('d F Y') }}, {{ $pelanggan->username }} sudah ngutang sebanyak {{ $jumlah }} kali dengan total tagihan sementara sebesar Rp. {{ number_format($total,0,'.',',') }}. Oke itu dulu, nanti kalo ada transaksi baru bakalan di kasih tau lagi. Terima Kasih.%0A%0AIjlik%0A_Pesan ini dibuat otomatis_" type="submit" class="btn btn-success btn-block btn-lg"><ion-icon name="logo-whatsapp"></ion-icon> Kirim Tagihan</a>
        </div>

        <div class="section mt-2 mb-2">
            <a href="https://api.whatsapp.com/send?phone={{ $pelanggan->no_hp}}&text=Halo {{ $pelanggan->username }},%0ABerikut ini informasi cara pembayaran tagihan via transfer dan jangan lupa kirimkan bukti transfernya.%0A%0ASilahkan transfer sebesar Rp. {{ number_format($total,0,'.',',') }} ke salah satu rekening bank berikut ini.%0A%0A - 0240633221 BCA A/n Adi Nugroho%0A - 0404822070 BNI A/n Adi Nugroho%0A - 90012874718 BTPN/Jenius A/n Adi Nugroho%0A - 4137439951 Bank Permata A/n Adi Nugroho%0A - 7273667745 Bank UOB A/n Adi Nugroho%0A%0AAtau bisa juga melalui E-Wallet berikut : %0A*OVO*, *GoPay*, *Dana*, *LinkAja* dengan nomor hp 085732860740.%0A%0AUntuk pembayaran metode lain silahkan tanya langsung aja. Terima Kasih.%0A%0AIjlik%0A_Pesan ini dibuat otomatis_" type="submit" class="btn btn-success btn-block btn-lg"><ion-icon name="logo-whatsapp"></ion-icon> Kirim Cara Pembayaran</a>
        </div>

    </div>
@stop
