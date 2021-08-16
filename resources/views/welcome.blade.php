<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Welcome to Genbookz</title>
</head>

<body>
    <img  class="bg1" src="{{ asset('img/bg.jpg') }}" alt="">
    <div class="container">
        <div class="navbarx">
            <a class="navbar-brand logo1" href="{{ url('/') }}">
                <img src="{{ asset('img/logo2.jpg') }}" height="28" class="d-inline-block align-top" alt="" loading="lazy">
                <p class="logo">Genbookz</p>
            </a>
            <div class="dropdown dropdown1">
                <a class="kategori btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bahasa Indonesia
                </a>
            
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Bahasa Indonesia</a>
                </div>
            </div>
        </div>
        <div class="hero">
            <div class="conten">
                <p class="hallo">
                    Halo, ini Genbookz.
                </p>
                <p class="hallo2">
                    Platform yang berguna untuk membaca cerita menarik
                    dari berbagai genre dan merupakan cerita original
                    yang hanya ada di Genbookz.
                </p>
                <p class="hallo3">
                    Genbookz sangat memperhatikan kenyamanan anda dalam
                    membaca cerita-cerita kami dan kami menghadirkan
                    pengalaman baru dalam membaca secara online.
                </p>
                <div class="tombol">
                    <div class="daftar text-center">
                        <a href="{{ route('register') }}" role="button" class="btn btn-secondary btn-daftar">Daftar</a>
                        <p class="penjelasan">
                            Buat akun baru jika kamu
                            tidak memiliki akun
                        </p>
                    </div>
                    <div class="masuk text-center">
                        <a href="{{ route('login') }}" role="button" class="btn btn-secondary btn-masuk">Masuk</a>
                        <p class="penjelasan">
                            Masuk jika kamu sudah
                            memiliki akun
                        </p>
                    </div>
                    <div class="tamu text-center">
                        <a role="button" class="btn btn-light btn-tamu">Masuk sebagai tamu</a>
                        <p class="penjelasan">
                            Coming Soon
                        </p>
                    </div>
                </div>
            </div>
            <div class="dekorasi">
                <img src="{{ asset('img/hero-logo.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-layanan text-center">
            <ul>
                <li><a href="{{route('footer')}}#tentangGenbookz">Tentang Kami</a></li>
                <li><a href="{{route('footer')}}#syaratKetentuan">Syarat dan Ketentuan</a></li>
                <li><a href="{{route('footer')}}#privasi">Privasi</a></li>
                <li><a href="{{route('footer')}}#hubungiKami">Hubungi</a></li>
                <li><a href="{{route('footer')}}#faq">FAQ</a></li>
                <li><a href="{{route('kritik')}}">Kritik dan Saran</a></li>
            </ul>
        </div>
    
        <div class="footer-icon">
            <div class="icon-sosmed">
                <ul>
                    <li><a class="jam jam-facebook" href="https://www.facebook.com/genbookz.sirius.5"></a></li>
                    <li><a class="jam jam-instagram" href="https://www.instagram.com/genbookz"></a></li>
                    <li><a class="jam jam-twitter" href="https://twitter.com/Genbookz2020"></a></li>
                </ul>
            </div>
            <div class="icon-genbookz">
                <a class="navbar-brand logo1" href="{{ url('/') }}">
                    <img src="{{ asset('img/genbookz.png') }}" class="d-inline-block align-top lg-bw" alt="" loading="lazy">
                    <div class="genbookz-copy">
                        <p class="logo lg-footer">Genbookz</p>
                        <span id="copy">&copy 2020</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <img class="bg2" src="{{ asset('img/bg.jpg') }}" alt="">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5734d4928d.js"></script>
</body>

</html>