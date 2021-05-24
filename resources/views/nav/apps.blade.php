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
        @yield('home')

        <footer class="row">
            <div class="row part-1">
                <div class="card" >

                    <ul>
                        <p>HUBUNGI KAMI</p>
                        <li>0274-5305505</li>
                        <li>Senin - Minggu</li>
                        <li>24 Jam Nonstop</li>
                    </ul>
                    <ul>
                        <li>Jl. Selokan Mataram Monjali
                        Karangjati MT I/304
                        Sinduadi, Melati, Sleman
                        Yogyakarta
                        </li>
                    </ul>

                </div>
                <div class="card" >
                    <ul>
                        <p>LAYANAN</p>
                        <li><a href="#">Domain</a></li>
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">Cloud VPS Hosting</a></li>
                        <li><a href="#">Managed VPS Hosting</a></li>
                        <li><a href="#">Web Builder</a></li>
                        <li><a href="#">Keamanan SSL/HTTPS</a></li>
                        <li><a href="#">Jasa Pembuatan Website</a></li>
                        <li><a href="#">Program Afiliasi</a></li>
                    </ul>
                </div>
                <div class="card" >
                    <ul>
                        <p>SERVICE HOSTING</p>
                        <li><a href="#">Hosting Singapura Murah</a></li>
                        <li><a href="#">Hosting Singapura SG</a></li>
                        <li><a href="#">Hosting PHP</a></li>
                        <li><a href="#">Hosting Wordpress</a></li>
                        <li><a href="#">Hosting Laravel</a></li>
                    </ul>
                </div>
                <div class="card" >
                    <ul>
                        <p>TUTORIAL</p>
                        <li><a href="#">Knowledgebase</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Cara Pembayaran</a></li>
                    </ul>
                </div>
            </div>
            <div class="row part-1">
                <div class="card" >
                    <ul>
                        <p>TENTANG KAMI</p>
                        <li><a href="#">Tim Niagahoster</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Penawaran & Promo Spesial</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="card" >
                    <ul>
                        <p>KENAPA PILIH NIAGAHOSTER?</p>
                        <li>Support Terbaik</li>
                        <li>Garansi Harga Termurah</li>
                        <li>Domain Gratis Selamanya</li>
                        <li>Datacenter Hosting Terbaik</li>
                        <li>Review Pelanggan</li>
                    </ul>
                </div>
                <div class="card newslater" >
                    <p>NEWSLETER</p>
                    <form class="invalid">
                        <div class="form-group">
                            <input type="email" class="inputField" id="email" placeholder="Email" required autocomplete="off">
                            <input type="submit" class="submitBtn" value="Berlangganan" name="">
                        </div>
                    </form>
                    <div class="newsleter-promo">
                       Dapatkan Promo dan Konten menarik
                        dari penyedia hosting terbaik Anda.
                    </div>
                </div>
                <div class="card social-card" >
                    <div class="sosial-media-fo">
                        <div class="circle-icon">
                            <i class="fa fa-facebook fb"></i>
                        </div>
                        <div class="circle-icon">
                            <i class="fa fa-twitter twt"></i>
                        </div>
                        <div class="circle-icon">
                            <i class="fa fa-google-plus gplus"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row part-2">
                <div class="card" >
                    <p>PEMBAYARAN</p>
                    <div class="payment">
                        <div class="icon-payment">
                            <img src="{{ asset('assets/images/BCA.png') }}" alt="">
                        </div>
                        <div class="icon-payment">
                            <img src="{{ asset('assets/images/Bni.png') }}" width="200px" height="100px" alt="">
                        </div>
                    </div>
                    <span>Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif</span>

                </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
