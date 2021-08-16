<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @guest
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/navbar-login.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    @endguest
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <script crossorigin src="{{ asset('js/react.development.js') }}"></script>
    <script crossorigin src="{{ asset('js/react-dom.development.js') }}"></script>
    <script src="{{ asset('js/babel.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Welcome to Genbookz</title>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo2.jpg') }}" height="28" class="d-inline-block align-top" alt="" loading="lazy">
                <p class="logo">Genbookz</p>
            </a>

            <div class="dropdown1 dropdown">
                <a class="kategori btn btn-secondary dropdown-toggle" href="{{ asset('category') }}" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Kategori
                </a>
            
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ asset('category') }}">Aksi</a>
                    <a class="dropdown-item" href="{{ asset('category') }}">Komedi</a>
                    <a class="dropdown-item" href="{{ asset('category') }}">Romantis<a>
                </div>
            </div>
            <div class="kosong"></div>
            <div class="kanan">
                <div class="search-box">
                    <a href="#" class="search-btn">
                        <img src="{{ asset('img/logo-search.png') }}" height="17" alt="">
                    </a>
                    <input type="text" class="search-txt" name="story" id="story" placeholder="Telusuri...">
                </div>
                <div id="story_list"></div>
                @guest
                    <div class="masuk">
                        <a href="{{ route('login') }}" class="masuk-btn">Masuk</a>
                    </div>
                    @if (Route::has('register'))
                        <div class="daftar">
                            <a role="button" href="{{ route('register') }}" class="btn btn-outline-secondary">Daftar</a>
                        </div>
                    @endif
                @else

                    <div class="dropdown notifikasi">
                        <a class="notif btn btn-secondary" href="#" role="button" id="dropdownMenuNotif" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24.5" height="24.5">
                                <path fill-rule="evenodd"
                                    d="M12 1C8.318 1 5 3.565 5 7v4.539a3.25 3.25 0 01-.546 1.803l-2.2 3.299A1.518 1.518 0 003.519 19H8.5a3.5 3.5 0 107 0h4.982a1.518 1.518 0 001.263-2.36l-2.2-3.298A3.25 3.25 0 0119 11.539V7c0-3.435-3.319-6-7-6zM6.5 7c0-2.364 2.383-4.5 5.5-4.5s5.5 2.136 5.5 4.5v4.539c0 .938.278 1.854.798 2.635l2.199 3.299a.017.017 0 01.003.01l-.001.006-.004.006-.006.004-.007.001H3.518l-.007-.001-.006-.004-.004-.006-.001-.007.003-.01 2.2-3.298a4.75 4.75 0 00.797-2.635V7zM14 19h-4a2 2 0 104 0z">
                                </path>
                            </svg>
                        </a>
                    
                        <div class="dropdown-menu dmn" aria-labelledby="dropdownMenuNotif">
                            <a class="dropdown-item" href="#">Aksi</a>
                            <a class="dropdown-item" href="#">Komedi</a>
                            <a class="dropdown-item" href="#">Romantis<a>
                        </div>
                    </div>
                    <div class="dropdown readlist">
                        <a class="readl btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                <path fill-rule="evenodd"
                                    d="M12.876.64a1.75 1.75 0 00-1.75 0l-8.25 4.762a1.75 1.75 0 00-.875 1.515v9.525c0 .625.334 1.203.875 1.515l8.25 4.763a1.75 1.75 0 001.75 0l8.25-4.762a1.75 1.75 0 00.875-1.516V6.917a1.75 1.75 0 00-.875-1.515L12.876.639zm-1 1.298a.25.25 0 01.25 0l7.625 4.402-7.75 4.474-7.75-4.474 7.625-4.402zM3.501 7.64v8.803c0 .09.048.172.125.216l7.625 4.402v-8.947L3.501 7.64zm9.25 13.421l7.625-4.402a.25.25 0 00.125-.216V7.639l-7.75 4.474v8.947z">
                                </path>
                            </svg>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Aksi</a>
                            <a class="dropdown-item" href="#">Komedi</a>
                            <a class="dropdown-item" href="#">Romantis<a>
                        </div>
                    </div>
                    <div class="dropdown minip" id="fotoAva">
                        <a class="mprofil btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="foto-p" src="{{asset('img/ava/' . $user->avatar)}}" alt="foto profil">
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <div class="profsayaset">
                                <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user"></i>Profil saya</a>
                            </div>
                            <div class="layananakun">
                                <a class="dropdown-item" href="{{ route('footer') }}#faq"><i class="fas fa-question-circle"></i>Bantuan</a>
                                <a class="dropdown-item" href="{{ route('kritik') }}"><i class="fas fa-phone"></i>Kirim masukan</a>
                                <a class="dropdown-item" href="{{ route('setting.edit_profile') }}"><i class="fas fa-cog"></i>Pengaturan</a>
                            </div>
                            <div class="kotaklogout">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Keluar</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="icon-cari">
                        <a class="search" href="#" role="button" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25" style="margin-top: -1.5px;">
                                <path fill-rule="evenodd"
                                    d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="rumah">
                        <a class="home" href="{{ route('home') }}" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" style="margin-top: 2px;">
                                <path fill-rule="evenodd"
                                    d="M11.03 2.59a1.5 1.5 0 011.94 0l7.5 6.363a1.5 1.5 0 01.53 1.144V19.5a1.5 1.5 0 01-1.5 1.5h-5.75a.75.75 0 01-.75-.75V14h-2v6.25a.75.75 0 01-.75.75H4.5A1.5 1.5 0 013 19.5v-9.403c0-.44.194-.859.53-1.144l7.5-6.363zM12 3.734l-7.5 6.363V19.5h5v-6.25a.75.75 0 01.75-.75h3.5a.75.75 0 01.75.75v6.25h5v-9.403L12 3.734z">
                                </path>
                            </svg>
                        </a>
                    </div>
                @endguest
            </div>
        </nav>

        <div id="nav-prof" class="nav-prof">
            <a class="tmbl-profil" href="{{ route('profile') }}">
                <div class="wadah-foto">
                    <div class="foto-prof">
                        <img class="foto-p" src="{{asset('img/ava/' . $user->avatar)}}" alt="foto profil">
                    </div>
                </div>
        
                <div class="ket-profil">
                    <div class="bungkus-prof">
                        <div style="font-size: 18px;font-weight: bold;">{{ $user->username }}</div>
                        <div>5 daftar bacaan</div>
                        <div>25 pengikut</div>
                        <div>30 mengikuti</div>
                    </div>
                </div>
                <div class="logo-next">
                    <i class="fas fa-chevron-right" style="font-size: 25px;color: #ff00ff;"></i>
                </div>
            </a>
            <div class="tmbl-profil2">
                <div>
                    <i class="fas fa-question-circle" style="color: #ff00ff;"></i>
                    <a href="{{ route('footer') }}#faq" class="tmbl-link">Bantuan</a>
                </div>
            </div>
            <div class="tmbl-profil2">
                <div>
                    <i class="fas fa-phone" style="color: #ff00ff;"></i>
                    <a href="{{ route('kritik') }}" class="tmbl-link">Kirim Masukan</a>
                </div>
            </div>
            <div class="tmbl-profil2">
                <div>
                    <i class="fas fa-cog" style="color: #ff00ff;"></i>
                    <a href="{{ route('setting.edit_profile') }}" class="tmbl-link">Pengaturan</a>
                </div>
        
            </div>
            <div class="tmbl-profil2">
                <div>
                    <i class="fas fa-sign-out-alt" style="color: #ff00ff;"></i>
                    <a class="tmbl-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form-hp').submit();">
                        Keluar
                    </a>
                    
                    <form id="logout-form-hp" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        
        <div id="navSearch">
            <!-- Pencarian -->
            <div class="row pencarian d-flex justify-content-center fixed-top">
        
                <div class="col-md-10 d-flex text-center srch">
                    <input type="text" placeholder="Cari" class="cari">
                    <span class="jam jam-search tombol-srch"></span>
                    <span class="jam jam-close tombol-close"></span>
                </div>
        
            </div>
            <!-- End Pencarian -->
            <div class="konten-deskripsi">
            </div>
        </div>
        
        <div id="navnotif">
            <div class="headnotif">
                <p class="isiheadnotif">Notifikasi</p>
            </div>
            <div class="bodynotif">
                <div class="no-notif text-center">Tidak ada notifikasi</div>
            </div>
        </div>
        
        <div id="navdb">
            <div class="headdb">
                <p class="isiheaddb">Daftar Bacaan</p>
            </div>
            <div class="bodydb">
                <div class="no-db text-center">Tidak ada daftar bacaan</div>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5734d4928d.js"></script>
    @guest
    <script></script>
    @else
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    @endguest
    <!-- LIVE SEARCH -->
    <script type="text/javascript">
            $(document).ready(function () {
             
                $('#story').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ route('search') }}",
                  
                        type:"GET",
                       
                        data:{'story':query},
                       
                        success:function (data) {
                          
                            $('#story_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', 'li', function(){
                  
                    var value = $(this).text();
                    $('#story').val(value);
                    $('#story_list').html("");
                });
            });
        </script>
</body>

</html>