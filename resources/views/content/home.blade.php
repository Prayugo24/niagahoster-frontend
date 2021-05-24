@extends('nav.apps')
@section('home')
@foreach($response as $value)
        <div class="row content-1">
            <div class="col-md-5 left-content">
                <h1>{{ $value['Content-1']['Left-content']['Title-1'] }} </h1>
                <h2>{{ $value['Content-1']['Left-content']['Title-2'] }}</h2>
                <div class="checkmark">
                    @foreach($value['Content-1']['Left-content']['Description'] as $values)
                        <li><i class="fa fa-check-circle"></i>{{ $values }}</li>
                    @endforeach
                </div>

            </div>
            <div class="col-md-4 right-content">
                <iframe src="{{ $value['Content-1']['Right-content']['Image'] }}"  frameborder=0></iframe>
            </div>

        </div>

        <div class="row content-2">
            <div class="col-md-2 left-content">
                <p>{{ $value['Content-2']['Left-content']['Title'] }}</p>
                <img src="{{ $value['Content-2']['Left-content']['Image'] }}" frameborder=0></img>
            </div>
            <div class="col-md-2 center-content">
                <p>{{ $value['Content-2']['Center-content']['Title'] }}</p>
                <img src="{{ $value['Content-2']['Center-content']['Image'] }}"  frameborder=0></img>
            </div>
            <div class="col-md-4 right-content">
                <p>{{ $value['Content-2']['Right-content']['Title'] }}</p>
                <img src="{{ $value['Content-2']['Right-content']['Image'] }}"  frameborder=0></img>
            </div>
        </div>

        <div class="row content-3">
            <div class="col-md-12 promo">
                <h1>{{ $value['Content-3']['Header']['Title-1'] }}</h1>
                <h2>{{ $value['Content-3']['Header']['Title-2'] }}</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card bayi" >
                        <div class="list-group list-group-flush">
                          <h5 class="list-group-item">{{ $value['Content-3']['Card']['Bayi']['Header'] }}</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <p><del>Rp. {{ $value['Content-3']['Card']['Bayi']['Price-strikethrough'] }}</del></p>
                            <?php
                                $Price = explode(".", $value['Content-3']['Card']['Bayi']['Price'] );
                            ?>
                                <div class="flex-content price">
                                    <p>Rp</p>
                                    <h4>{{$Price[0]}} </h4>
                                    <p class="font-bold">.{{$Price[1]}}</p>
                                    <p>/ bln</p>
                                </div>


                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item flex-content users">
                                <p class="font-modiv">{{ $value['Content-3']['Card']['Bayi']['Users'] }}</p>
                                <p>Pengguna Terdaftar</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">0.5x RESOURCE POWER</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">500 MB</p>
                                <p>Diks Space</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Bandwidth</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Databases</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">1</p>
                                <p>Domain</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Instant</p>
                                <p>Backup</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited SSL</p>
                                <p>Gratis Selamanya</p>
                            </div>

                            <button class="btn btn-black btn-choice">Pilih Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card pelajar">
                        <div class="list-group list-group-flush">
                          <h5 class="list-group-item">{{ $value['Content-3']['Card']['Pelajar']['Header'] }}</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <p><del>Rp. {{ $value['Content-3']['Card']['Pelajar']['Price-strikethrough'] }}</del></p>
                            <?php
                                $Price = explode(".", $value['Content-3']['Card']['Pelajar']['Price'] );
                            ?>
                            <div class="flex-content price">
                                <p>Rp</p>
                                <h4>{{$Price[0]}} </h4>
                                <p class="font-bold">.{{$Price[1]}}</p>
                                <p>/ bln</p>
                            </div>

                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item flex-content users">
                            <p class="font-modiv">{{ $value['Content-3']['Card']['Pelajar']['Users'] }}</p>
                                <p>Pengguna Terdaftar</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">1x RESOURCE POWER</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Diks Space</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Bandwidth</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>POP3 Email</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Databases</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">10</p>
                                <p>Addon Domain</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Instant</p>
                                <p>Backup</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Domain Gratis</p>
                                <p>Selamanya</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited SSL</p>
                                <p>Gratis Selamanya</p>
                            </div>

                            <button class="btn btn-black btn-choice">Pilih Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card border-blue personal">
                        <div class="list-group list-group-flush spesial">
                          <h5 class="list-group-item">{{ $value['Content-3']['Card']['Personal']['Header'] }}</h5>
                        </div>
                        <div class="ribbon ribbon-top-left"><span>BEST SELLER!</span></div>
                        <div class="list-group list-group-flush spesial">
                            <p><del>Rp. {{ $value['Content-3']['Card']['Personal']['Price-strikethrough'] }}</del></p>
                            <?php
                                $Price = explode(".", $value['Content-3']['Card']['Personal']['Price'] );
                            ?>
                            <div class="flex-content price">
                                <p>Rp</p>
                                <h4>{{$Price[0]}} </h4>
                                <p class="font-bold">.{{$Price[1]}}</p>
                                <p>/ bln</p>
                            </div>

                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item flex-content users">
                                <p class="font-modiv">{{ $value['Content-3']['Card']['Personal']['Users'] }}</p>
                                <p>Pengguna Terdaftar</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">2x RESOURCE POWER</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Diks Space</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Bandwidth</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>POP3 Email</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Databases</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Addon Domain</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Instant</p>
                                <p>Backup</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Domain Gratis</p>
                                <p>Selamanya</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited SSL</p>
                                <p>Gratis Selamanya</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Private</p>
                                <p>Name Server</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">SpamAssasin</p>
                                <p>Mail Protection</p>
                            </div>

                            <button class="btn btn-primary btn-choice">Pilih Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card bisnis" >
                        <div class="list-group list-group-flush">
                          <h5 class="list-group-item">{{ $value['Content-3']['Card']['Bisnis']['Header'] }}</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <p><del>Rp. {{ $value['Content-3']['Card']['Bisnis']['Price-strikethrough'] }}</del></p>
                            <?php
                                $Price = explode(".", $value['Content-3']['Card']['Bisnis']['Price'] );
                            ?>
                            <div class="flex-content price">
                                <p>Rp</p>
                                <h4>{{$Price[0]}} </h4>
                                <p class="font-bold">.{{$Price[1]}}</p>
                                <p>/ bln</p>
                            </div>

                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item flex-content users">
                            <p class="font-modiv">{{ $value['Content-3']['Card']['Bisnis']['Users'] }}</p>
                                <p>Pengguna Terdaftar</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">3x RESOURCE POWER</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Diks Space</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Bandwidth</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>POP3 Email</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Databases</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited</p>
                                <p>Addon Domain</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Magic Auto</p>
                                <p>Backup & Restore</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Domain Gratis</p>
                                <p>Selamanya</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Unlimited SSL</p>
                                <p>Gratis Selamanya</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Private</p>
                                <p>Name Server</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">Prioritas</p>
                                <p>Layanan Support</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv star">★★★★★</p>
                            </div>
                            <div class="flex-content list-contnet">
                                <p class="font-modiv">SpamExpert</p>
                                <p>Pro Mail Protection</p>
                            </div>

                            <button class="btn btn-black btn-choice">Diskon 40%</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach


        <div class="row content-4">
            <div class="col-md-12">
                <h2>Powerful dengan Limit PHP yang Lebih Besar</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" >
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><i class="fa fa-check-circle"></i>max execution time 300s</li>
                          <li class="list-group-item spesial"><i class="fa fa-check-circle"></i>max execution time 300s</li>
                          <li class="list-group-item"><i class="fa fa-check-circle"></i>php memory limit 1024 MB</li>
                        </ul>
                      </div>
                </div>
                <div class="col-md-6 list">
                    <div class="card ">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><i class="fa fa-check-circle"></i>post max size 128 MB</li>
                          <li class="list-group-item spesial"><i class="fa fa-check-circle"></i>upload max filesize 128 MB</li>
                          <li class="list-group-item"><i class="fa fa-check-circle"></i>max input vars 2500</li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
        <div class="row content-5">
            <div class="col-md-12">
                <h2>Semua Paket Hosting Sudah Termasuk</h2>
            </div>
            <div class="row part-1">
                <div class="card" >
                    <iframe src="{{ asset('assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}" frameborder=0></iframe>
                    <h5>PHP Semua versi</h5>
                    <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7.
                        Ubah sesuka Anda!
                    </p>

                </div>
                <div class="card" >
                    <iframe src="{{ asset('assets/svg/icon PHP Hosting_My SQL.svg') }}" frameborder=0></iframe>
                    <h5>MySQL Versi 5.6</h5>
                    <p>Nikmati Mysql versi terbaru, tercepat dan
                        kaya akan fitur
                    </p>
                </div>
                <div class="card" >
                    <iframe src="{{ asset('assets/svg/icon PHP Hosting_CPanel.svg') }}" frameborder=0></iframe>
                    <h5>Panel Hosting cPanel</h5>
                    <p>Kelola website dengan panel canggih yang
                        familiar di hati Anda
                    </p>
                </div>

            </div>
            <div class="row part-2">
                <div class="card img-1" >
                    <iframe src="{{ asset('assets/svg/icon PHP Hosting_garansi uptime.svg') }}" frameborder=0></iframe>
                    <h5>Garansi Uptime 99.9%</h5>
                    <p>Data center yang mendukung kelangsungan
                        website Anda 24/7
                    </p>
                </div>
                <div class="card img-2" >
                    <iframe src="{{ asset('assets/svg/icon PHP Hosting_InnoDB.svg') }}" frameborder=0></iframe>
                    <h5>Database InnoDB Unlimited</h5>
                    <p>Jumlah dan ukuran database yang tumbuh
                        sesuai kebutuhan Anda
                    </p>
                </div>
                <div class="card img-3" >
                    <iframe src="{{ asset('assets/svg/icon PHP Hosting_My SQL remote.svg') }}" frameborder=0></iframe>
                    <h5>Wildcard Remote Mysql</h5>
                    <p>Mendukung s/d 25 max_user_connections
                        dan 100 max_connections
                    </p>
                </div>

            </div>
        </div>

        <div class="row content-6">
            <div class="col-md-12 title">
                <h2>Mendukung Penuh Framework Laravel</h2>
            </div>
            <div class="col-md-5 left-content">
                <p>Tak perlu menggunakan dedicated server ataupun VPS
                    yang mahal. Layanan PHP hosting murah kami
                    mendukung penuh framework favorit Anda.
                </p>
                <div class="checkmark">
                    <p><i class="fa fa-check-circle"></i>Install Laravel <b>1 Klik</b> dengan Softaculous Installer.</p>
                    <p><i class="fa fa-check-circle"></i>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json</b> dan <b>fileinfo</b></p>
                    <p><i class="fa fa-check-circle"></i>Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstall package pilihan Anda</p>
                </div>
                <div class="notice">
                    <p>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                </div>
                <div class="btn-choice">
                    <button class="btn btn-primary">Pilih Hosting Anda</button>
                </div>
            </div>
            <div class="col-md-4 right-content">
                <iframe src="{{ asset('assets/svg/illustration banner support laravel hosting.svg') }}"  frameborder=0></iframe>
            </div>
        </div>

        <div class="row content-7">
            <div class="col-md-12">
                <h2>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h2>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="card" style="width: 20rem;">
                        <ul>
                            <li>IcePhp</li>
                            <li>apc</li>
                            <li>apcu</li>
                            <li>apm</li>
                            <li>ares</li>
                            <li>bcmath</li>
                            <li>bcompiler</li>
                            <li>big_int</li>
                            <li>bitset</li>
                            <li>bloomy</li>
                            <li>bz2_filter</li>
                            <li>clamav</li>
                            <li>coin_acceptor</li>
                            <li>crack</li>
                            <li>dba</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 20rem;">
                        <ul>
                            <li>http</li>
                            <li>huffman</li>
                            <li>idn</li>
                            <li>igbinary</li>
                            <li>imagick</li>
                            <li>imap</li>
                            <li>inclued</li>
                            <li>inotify</li>
                            <li>interbase</li>
                            <li>intl</li>
                            <li>incube_loader</li>
                            <li>incube_loader_4</li>
                            <li>jsmin</li>
                            <li>json</li>
                            <li>ldap</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 20rem;">
                        <ul>
                            <li>nd_pdo_mysql</li>
                            <li>oauth</li>
                            <li>oci8</li>
                            <li>odbc</li>
                            <li>opcache</li>
                            <li>pdf</li>
                            <li>pdo</li>
                            <li>pdo_dblib</li>
                            <li>pdo_firebird</li>
                            <li>pdo_mysql</li>
                            <li>pdo_odbc</li>
                            <li>pdo_pgsql</li>
                            <li>pdo_sqlite</li>
                            <li>pgsql</li>
                            <li>phalcon</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 20rem;">
                        <ul>
                            <li>stats</li>
                            <li>stem</li>
                            <li>stomp</li>
                            <li>suhosin</li>
                            <li>sybase_ct</li>
                            <li>sysvmsg</li>
                            <li>sysvsem</li>
                            <li>sysvshm</li>
                            <li>tidy</li>
                            <li>timezonedb</li>
                            <li>trader</li>
                            <li>translit</li>
                            <li>uploadprogress</li>
                            <li>uri_template</li>
                            <li>uuid</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-black btn-choice">Selengkapnya</button>
            </div>


        </div>

        <div class="row content-8">
            <div class="col-md-5 left-content">
                <h2>Linux Hosting yang Stabil
                    dengan Teknologi LIVE
                </h2>
                <p>Super Micro <b>Intel Xeon 24-Cores</b> server dengan Ram <b>128 GB</b> dan
                    teknologi <b>LIVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi
                    dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer
                    berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> Protection
                    dan auto backup untuk keamanan website PHP Anda.
                </p>
                <div class="btn-choice">
                    <button class="btn btn-primary">Pilih Hosting Anda</button>
                </div>
            </div>
            <div class="col-md-4 right-content">
                <img src="{{ asset('assets/images/Image support.png') }}" ></img>
            </div>
        </div>
        <div class="row content-9">
            <div class="col-md-5 left-content">
                <p>Bagikan jika anda menyukai halaman ini
                </p>
            </div>
            <div class="col-md-4 right-content">
                <div class="social-media">
                    <div class="tooltips">
                        <img src="{{ asset('assets/images/facebook.png') }}" alt="">
                        <span class="tooltiptexts">80 K</span>
                    </div>
                </div>
                <div class="social-media">
                    <div class="tooltips">
                        <img src="{{ asset('assets/images/google_plus.png') }}" alt="">
                        <span class="tooltiptexts">450</span>
                    </div>
                </div>
                <div class="social-media">
                    <div class="tooltips">
                        <img src="{{ asset('assets/images/tweeter.png') }}" alt="">
                        <span class="tooltiptexts">1900</span>
                    </div>
                </div>

            </div>

        </div>
        <div class="row content-10">
            <div class="col-md-12 left-content">
                <h2>Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b></h2>
                <div class="vl"></div>
                <button><i class="material-icons">question_answer</i>
                    <p>Live Chat</p></button>
            </div>
        </div>
@endsection
