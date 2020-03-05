@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="/transaction" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Tambah Transaksi</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section full mt-1 mb-2">
            <div class="section-title">Date : {{ now() }}</div>
            <div class="wide-block pb-1 pt-2">

                <form action="/transaction/add" method="POST" onsubmit="document.getElementById('btn-simpan').type='button';">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="city5">Pelanggan</label>
                            <select class="form-control custom-select" id="city5" name="pelanggan" required>
                                @foreach($pelanggan as $user)
                                    <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="city5">Product</label>
                            <select class="form-control custom-select" id="city5" name="product" required>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="address5">Deskripsi</label>
                            <textarea id="address5" rows="2" class="form-control" name="deskripsi" required></textarea>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="email5">Nominal</label>
                            <input type="number" class="form-control" id="email5" placeholder="Nominal" name="nominal" required>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="password5">Harga Jual</label>
                            <input type="number" class="form-control" id="password5" placeholder="Harga Jual" name="harga_jual" required>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="phone5">Harga Beli</label>
                            <input type="number" class="form-control" id="phone5" placeholder="Harga Beli" name="harga_beli" required>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>
                    <br>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" id="btn-simpan">Simpan</button>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- * App Capsule -->
@stop
