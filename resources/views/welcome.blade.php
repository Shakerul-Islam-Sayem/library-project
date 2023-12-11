@extends('layouts.guest')
@section('title'){{ 'Library Management System' }}
@endsection
@section('content')
    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo rounded">
                        <img src="{{ asset('images/library.png') }}" alt="">
                    </div>
                    <form class="yourform" action="{{ route('login') }}" method="post">
                        @csrf
                        <h3 class="heading">Admin Login</h3>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="" required>
                        </div>
                        <input type="submit" name="login" class="w-25 mt-2 btn btn-success" value="login" />
                    </form>
                    @error('username')
                        <div class='alert alert-info'>{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
