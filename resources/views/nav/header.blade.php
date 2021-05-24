@section('header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Web Hosting Indonesia Unlimited & Terbaik - Niagahoster</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/riborn.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <header>
            <div class="contact-info">
                <div class="bookmark-ribbon">
                    <i class="fa fa-tag"></i>
                </div>
                <p>Gratis Ebook 9 Cara Cerdas Mengguanakan Domain [x]</p>
                <div class="contact as">
                    <i class="material-icons">account_circle</i>
                    <a href="#" class="">Member Area</a>
                </div>
                <div class="contact">
                    <i class="material-icons">question_answer</i>
                    <a href="#" class="">Live Chat</a>
                </div>
                <div class="contact end">
                    <i class="material-icons">phone</i>
                    <a href="#" class="">0274-5305505</a>
                </div>
            </div>

            <div class="menu-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <img src="{{ asset('assets/images/niagahoster-logo.png') }}"  alt="">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="">Hosting</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Domain</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Server</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Website</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Afiliasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Promo</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Pembayaran</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Review</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Kontak</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Blog</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </header>
@endsection
