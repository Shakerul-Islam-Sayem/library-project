<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    {{-- <title>{{ config('app.name', 'Library Management System') }}</title> --}}
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }} "> <!-- Custom stlylesheet -->

    <style>
        /* CSS */
        .button-85 {
            font-size: 18px;
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }
        .button-85:before {
            content: "";
            background: linear-gradient(45deg,
            #ff0000,
                    #ff7300,
                    #fffb00,
                    #48ff00,
                    #00ffd5,
                    #002bff,
                    #7a00ff,
                    #ff00c8,
                    #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(15px);
            -webkit-filter: blur(15px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing-button-85 20s linear infinite;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowing-button-85 {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .button-85:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #222;
            left: 0;
            top: 0;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('images/library.png') }}"></a>
                    </div>
                </div>
                <div class="offset-md-2 col-md-2">
                    <div class="dropdown">
                        <button class="button-85 btn btn-secondary dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi {{ auth()->user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                            <a class="dropdown-item" href="#"
                                onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                        </div>
                        <form method="post" id="logoutForm" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /HEADER -->
    <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('authors') }}">Authors</a></li>
                        <li><a href="{{ route('publishers') }}">Publishers</a></li>
                        <li><a href="{{ route('categories') }}">Categories</a></li>
                        <li><a href="{{ route('books') }}">Books</a></li>
                        <li><a href="{{ route('students') }}">Reg Students</a></li>
                        <li><a href="{{ route('book_issued') }}">Book Issue</a></li>
                        <li><a href="{{ route('reports') }}">Reports</a></li>
                        <li><a href="{{ route('settings') }}">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar -->

    @yield('content')

    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© 2023 <a href="">Library 📚 All rights reserved by Imon, Sayem, Ashis, Musfiq,
                            Opu</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /FOOTER -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script>

</body>

</html>
