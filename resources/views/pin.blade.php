@extends('layouts.app')
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Password</h1>
            <h4>Enter password to open Application</h4>
        </div>
        <div class="section mt-2 mb-5 p-3">
            <form action="/" method="POST">
                @csrf
                <div class="form-group basic">
                    <input type="password" name="password" class="form-control verification-input" id="smscode" placeholder="••••••" maxlength="6" required>
                </div>

                <div class="form-group basic">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                </div>

            </form>
        </div>
        <div class="appFooter form-button-group">
            <div class="footer-title">
                Copyright © PPOB ijlik.tech 2020. All Rights Reserved.<br><a target="_blank" href="https://github.com/priyafaza">@priyafaza</a>, <a target="_blank" href="https://github.com/ijlik">@ijlik</a>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
@stop