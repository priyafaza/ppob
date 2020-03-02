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
            <div class="section-title">Boxed</div>
            <div class="wide-block pb-1 pt-2">

                <form>
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="name5">Name</label>
                            <input type="text" class="form-control" id="name5" placeholder="Enter your name">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="email5">E-mail</label>
                            <input type="email" class="form-control" id="email5" placeholder="E-mail address">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="city5">City</label>
                            <select class="form-control custom-select" id="city5">
                                <option value="0">Select a city</option>
                                <option value="1">New York City</option>
                                <option value="2">Austin</option>
                                <option value="3">Colorado</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="password5">Password</label>
                            <input type="password" class="form-control" id="password5" placeholder="Type a password">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="phone5">Phone</label>
                            <input type="tel" class="form-control" id="phone5" placeholder="Enter your phone number">
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="address5">Address</label>
                            <textarea id="address5" rows="2" class="form-control"></textarea>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="section mt-2 mb-2">
            <a href="" class="btn btn-primary btn-block btn-lg">Simpan</a>
        </div>
    </div>
    <!-- * App Capsule -->
@stop