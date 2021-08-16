<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Jam Icon -->
        <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

        <!-- Font Style -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

        <!-- Reset CSS -->
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

        <!-- My CSS -->
        <link rel="stylesheet" href="{{ asset('css/category.css') }}">
        
        <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

        <!-- ReactJs -->
        <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

        <title>Page Kategori</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="dropdown-katagori">
            <div class="dropdown">
                <button class="btn dropdown-toggle shadow-none jeneng" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Komedi
                </button>
                <div class="dropdown-menu dropdown-menu-katagori" aria-labelledby="dropdownMenuButton">
                    <a type="button" class="btn-katagori d-block text-center">Komedi</a>
                    <a type="button" class="btn-katagori d-block text-center">Fantasi</a>
                    <a type="button" class="btn-katagori d-block text-center">Aksi</a>
                    <a type="button" class="btn-katagori d-block text-center">Horror</a>
                    <a type="button" class="btn-katagori d-block text-center">Misteri</a>
                    <a type="button" class="btn-katagori d-block text-center">Romantis</a>
                    <a type="button" class="btn-katagori d-block text-center">Triller</a>
                    <a type="button" class="btn-katagori d-block text-center">Remaja</a>
                    <a type="button" class="btn-katagori d-block text-center">Dewasa</a>
                    <a type="button" class="btn-katagori d-block text-center">Petualangan</a>
                    <a type="button" class="btn-katagori d-block text-center">Non-Fiksi</a> 
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
        </div>
        <!-- End Jumbotron -->

        <!-- Katagori -->
        <div class="katagori">
            <a type="button" class="btn-katagori">Komedi</a>
            <a type="button" class="btn-katagori">Fantasi</a>
            <a type="button" class="btn-katagori">Aksi</a>
            <a type="button" class="btn-katagori">Horror</a>
            <a type="button" class="btn-katagori">Misteri</a>
            <a type="button" class="btn-katagori">Romantis</a>
            <a type="button" class="btn-katagori">Triller</a>
            <a type="button" class="btn-katagori">Remaja</a>
            <a type="button" class="btn-katagori">Dewasa</a>
            <a type="button" class="btn-katagori">Petualangan</a>
            <a type="button" class="btn-katagori">Non-Fiksi</a>  
            
        </div>
        <!-- End Katagori -->

        <!-- Kontent -->
        <div class="kumpulan-konten" id="kumpulan-konten">
            <!-- <div class="card-book">
                <div class="tumbnail">
                    <img src="gambar/tumbnail.jpg" alt="">
                </div>
                <div class="deskripsi">
                    <h4>Nini Thowok</h4>
                    <p class="rilis"><span style="color: #ff00ff;">98% Cocok</span> Agustus 2019 Drama Horor</p>
                    <div class="kumpulan-deskripsi">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, excepturi animi, nisi dolor doloremque nesciunt temporibus aspernatur veniam quia, repellendus exercitationem? Consequuntur maiores repudiandae aperiam cumque consectetur neque? Magnam, at.</p>
                        <a href="">Baca novel ini ></a>
                        <div class="dropdown titik3">
                            <button class="dropdown btn-more titik3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="jam jam-more-vertical-f tombol-list"></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><li><span class="jam jam-heart-f"></span><span>  Disukai</span></li></a>
                                <a class="dropdown-item" href="#"><li><span class="jam jam-plus"></span><span>  Tambah ke daftar bacaan</span></li></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
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

        <!-- End Card Book -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/babel">
            class KontenCard extends React.Component {
                render() {
                    return(
                        <div className="card-book">
                            <div className="tumbnail">
                                <img src={this.props.urlgambar} alt=""/>
                            </div>
                            <div className="deskripsi">
                                <h4>{this.props.judulbuku}</h4>
                                <p className="rilis"><span className="warna-#ee00ee">{this.props.suka}% Cocok</span> {this.props.tglrilis} {this.props.genre}</p>
                                <div className="kumpulan-deskripsi">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, excepturi animi, nisi dolor doloremque nesciunt temporibus aspernatur veniam quia, repellendus exercitationem? Consequuntur maiores repudiandae aperiam cumque consectetur neque? Magnam, at.</p>
                                    <a href="">Baca novel ini </a>
                                    <div className="dropdown titik3">
                                        <button className="dropdown btn-more titik3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span className="jam jam-more-vertical-f tombol-list"></span>
                                        </button>
                                        <div className="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a className="dropdown-item" href="#"><li><span className="jam jam-heart-f"></span><span>  Disukai</span></li></a>
                                            <a className="dropdown-item" href="#"><li><span className="jam jam-plus"></span><span>  Tambah ke daftar bacaan</span></li></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    )
                }
            };

            KontenCard.defaultProps = {
                urlgambar : "{{ asset('img/gambardefault.jpeg') }}",
                judulbuku : "Judul Buku",
                suka : 0,
                tglrilis : "Agustus 2020",
                genre : "Umum"
            };

            class KumpulanKc extends React.Component {
                render() {
                    return(
                        <div className="konten">
                            <KontenCard 
                                judulbuku = 'NiniThowok'
                                urlgambar = "{{ asset('img/tumbnail.jpg') }}"
                                suka = {7}
                            />
                            <KontenCard />
                            <KontenCard />
                            <KontenCard />
                            <KontenCard />    
                        </div>
                    )
                }
            };

            ReactDOM.render(<KumpulanKc />, document.getElementById("kumpulan-konten"));
        </script>
    </body>
</html>