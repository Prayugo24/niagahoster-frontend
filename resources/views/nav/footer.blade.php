@section('footer')
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
@endsection
