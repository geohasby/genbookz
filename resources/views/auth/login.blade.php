<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/masuk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Masuk</title>
</head>

<body>

    <a class="navbar-brand logo1 logo-u" href="{{ url('/') }}">
        <img src="{{ asset('img/logo2.png') }}" height="36" class="d-inline-block align-top" alt="" loading="lazy">
        <p class="logo logo-u1">Genbookz</p>
    </a>


    <form class="form-daftar" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="judul">
            Masuk
        </div>

        @error('identity')
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
        @enderror

        <div class="form-group">
            <label class="judul-form" for="identity">Nama Pengguna / Email</label>
            <input id="identity" type="identity" class="form-control @error('identity') is-invalid @enderror" name="identity" value="{{ old('identity') }}" required autocomplete="identity" autofocus>
        </div>
        <div class="form-group">
            <label class="judul-form" for="password">Kata Sandi</label>
            <input id="password" type="password" class="form-control @error('identity') is-invalid @enderror" name="password" required>
            <button type="button" id="btn" class="text-right"><i class="fa fa-eye" aria-hidden="true"></i></button>
        </div>
        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
        
                    <label class="form-check-label" for="remember">
                        Ingat saya
                    </label>
                </div>
            </div>
        </div>

        <div class="captcha"></div>
        <div class="tombol-daftar text-center">
            <button type="submit" class="btn btn-secondary btn-daftar">Masuk</button>
        </div>
        @if (Route::has('password.request'))
            <a class="link1 text-center d-block" href="{{ route('password.request') }}">
                Lupa kata sandi?
            </a>
        @endif
        <div class="span2 text-center">Belum memiliki akun? <a class="link1" href="{{ route('register') }}">Buat akun</a></div>
    </form>
    
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



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{ asset('js/masuk.js') }}"></script>

@yield('scripts')
</body>

</html>