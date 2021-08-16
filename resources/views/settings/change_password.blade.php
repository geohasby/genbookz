<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengaturan2.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Ubah Kata Sandi</title>
</head>

<body>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="nav-set">
            <div class="judul">Pengaturan</div>
            <div class="nav-p">
                <a href="{{ route('setting.edit_profile') }}" type="button" class="btn btn-secondary shadow-none"><i class="fas fa-user judul-ico"></i>Edit Profil</a>
                <hr>
                <a href="#" type="button" class="btn-on btn btn-secondary shadow-none"><i class="fas fa-key judul-ico"></i>Ubah Kata Sandi</a>
                <hr>
                <a href="{{ route('setting.notification') }}" type="button" class="btn btn-secondary shadow-none"><i class="fas fa-bell judul-ico"></i>Notifikasi</a>
                <hr>
                <a href="{{ route('setting.language') }}" type="button" class="btn btn-secondary shadow-none"><i class="fas fa-language judul-ico"></i>Bahasa</a>
                <hr>
                <a href="{{ route('setting.connection') }}" type="button" class="btn btn-secondary shadow-none"><i class="fas fa-link judul-ico"></i>Koneksi</a>
            </div>
        </div>
        <div class="conten">
            <div class="set-conten set-profil">
                <div class="judul-sub">Ubah Kata Sandi</div>
                <div class="cont-prof">
                    <div class="judul-form">
                        <div class="foto-prof">
                            <img class="foto-p" src="{{ asset('img/ava/' . old('avatar', $user->avatar)) }}" alt="foto profil">
                        </div>
                        <label class="judulf" for="current_password">Kata Sandi Lama</label>
                        <label class="judulf" for="new_password">Kata Sandi Baru</label>
                        <label class="judulf" for="new_password_confirmation">Konfirmasi Kata Sandi Baru</label>
                    </div>
                    <div class="isi-form">
                        <form method="POST" action="{{ route('setting.update_password') }}">
                            @method('patch')
                            @csrf
                            <div class="form-group" style="margin-bottom: 63px;">
                                <span class="nama-akun">{{$user->username}}</span>
                            </div>
                            <div class="form-group">
                                <input id="current_password" name="current_password" class="form-control form-control-sm @if($message = Session::get('error')) is-invalid @endif" type="password" style="margin-top: 0!important;">

                                @if ($message = Session::get('error'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="new_password" name="new_password" class="form-control form-control-sm @error('new_password') is-invalid @enderror" type="password">

                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="new_password_confirmation" name="new_password_confirmation" class="form-control form-control-sm @error('new_password_confirmation') is-invalid @enderror" type="password" style="margin-bottom: 30px;">

                                @error('new_password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary shadow-none btn-input">Ubah Kata Sandi</button>
                            </div>

                        </form>
                    </div>
                </div>
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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5734d4928d.js"></script>
    <script src="{{ asset('js/pengaturan.js') }}"></script>
</body>

</html>