@extends('layouts.app')
@section('content')
    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="/users" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Tambah Pelanggan</div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section full mt-1 mb-2">
            <div class="wide-block pb-1 pt-2">

                <form action="/users/add" method="POST" onsubmit="document.getElementById('btn-simpan').type='button';" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper text-center">
                            <label class="label" for="city5">Foto</label>
                            <img id="main_pre" style="width: 200px; height: auto" src="/assets/img/no-preview.jpg">
                            <input id="main_image" type="file" accept="image/*" class="form-control" name="main_image" required>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="email5">Nama</label>
                            <input type="text" class="form-control" id="email5" placeholder="Nama Lengkap" name="nama" required>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="phone5">Alias</label>
                            <input type="text" class="form-control" id="phone5" placeholder="Nama Panggilan" name="username" required>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="password5">No Hp</label>
                            <input type="number" class="form-control" id="password5" placeholder="cth: 6285xxxxxx" name="no_hp" required>
                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="phone5">Alamat</label>
                            <textarea id="address5" rows="2" class="form-control" name="alamat" required></textarea>
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

@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                console.log(e.target.result);
                $('#main_pre').attr('src', e.target.result);
                console.log($('#main_pre').attr('src'));
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#main_image').change(function () {
        readURL(this);
    });
</script>
@stop
