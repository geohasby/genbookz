<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">

        <!-- Css Reset -->
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- My Style -->
        <link rel="stylesheet" href="{{ asset('css/kritik.css') }}">
        
        <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

        <!-- Font Style -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
        <title>Genbookz</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1>Kritik dan Saran</h1>
                    <p>Terimakasih jika anda berkenan memberikan kritik ataupun saran. Kami selalu mengedepankan kenyamanan pengguna Genbookz.</p>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <form action="{{ route('kirim_kritik') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group text-kritik">
                        <textarea class="form-control" id="karakter" name="message" rows="15"></textarea>
                    </div>
                    <div class="kolom-hitung">
                        <span id="hitung">1000</span>
                        <span>/1000</span>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Send</button>

                    <form>

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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Batasan Text -->
        <script src="{{ asset('js/batasanText.js') }}"></script>
    </body>
</html>