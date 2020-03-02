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

                <form>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="city5">Pelanggan</label>
                            <select class="form-control custom-select" id="city5">
                                <option value="0">Pilih Pelanggan</option>
                                <option value="1">New York City</option>
                                <option value="2">Austin</option>
                                <option value="3">Colorado</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="city5">Product</label>
                            <select class="form-control custom-select" id="city5">
                                <option value="0">Pilih Product</option>
                                <option value="1">New York City</option>
                                <option value="2">Austin</option>
                                <option value="3">Colorado</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="address5">Deskripsi</label>
                            <textarea id="address5" rows="2" class="form-control"></textarea>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="email5">Nominal</label>
                            <input type="number" class="form-control" id="email5" placeholder="Nominal">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="password5">Harga Jual</label>
                            <input type="number" class="form-control" id="password5" placeholder="Harga Jual">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="phone5">Harga Beli</label>
                            <input type="number" class="form-control" id="phone5" placeholder="Harga Beli">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>
                    <br>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <a href="" class="btn btn-primary btn-block btn-lg">Simpan</a>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- * App Capsule -->
@stop
