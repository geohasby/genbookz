<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Daftar</title>
</head>

<body>
    <img class="bg1" src="{{ asset('img/bg.jpg') }}" alt="">
    <img class="gambar-hero" src="{{ asset('img/hero-daftar.png') }}" alt="">
    <div class="container">
        <div class="navbar-daftar">
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
            <div class="tamu-masuk">
                <span>Sudah memiliki akun ?</span>
                <!-- <button type="button" class="btn btn-light btn-tamu">Masuk sebagai tamu</button> -->
                <a href="{{ route('login') }}" role="button" class="btn btn-light btn-masuk">Masuk</a>
            </div>
        </div>
        <div class="conten">
            <div class="hero-daftar">
                <p>Dibuat untuk meningkatkan minat baca generasi <span>Z</span><br>dan mengangkat cerita anak bangsa.</p>
            </div>
            <div class="form-kotak">
                <form class="form-daftar" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="judul text-center">
                        Buat Akun Baru
                    </div>
                    <div class="form-group">
                        <label class="judul-form" for="username">Nama Pengguna</label>
                        <input type="username" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Hanya boleh menggunakan huruf, angka, titik( . ) dan garis bawah( _ )" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="judul-form" for="name">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="judul-form" for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="judul-form" for="password">Kata Sandi</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="judul-form password-confirm" for="password-confirm">Konfirmasi Kata Sandi</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group captcha text-center">
                        {!! NoCaptcha::display() !!}
                        
                        @error('g-recaptcha-response')
                            <span class="invalid-feedback d-inline-block" role="alert">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="span1">Dengan mengklik tombol "Daftar", maka kamu telah menyetujui <a class="link1" href="{{route('footer')}}#syaratKetentuan">syarat dan ketentuan</a> yang berlaku.</div>
                    <div class="tombol-daftar text-center">
                        <button type="submit" class="btn btn-secondary btn-daftar">Daftar</button>
                    </div>
                    <div class="span2 text-center">Sudah memiliki akun ? <a class="link1" href="{{ route('login') }}">Masuk</a></div>
                </form>
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
<script src="{{ asset('js/daftar.js') }}"></script>
{!! NoCaptcha::renderJs() !!}
</body>

</html>