<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Jam Icon -->
        <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

        <!-- Font Style -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

        <!-- My CSS -->
        <link rel="stylesheet" href="{{ asset('css/daftar_isi.css') }}">

        <!-- ReactJs -->
        <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

        <title>Genbookz</title>
    </head>
    <body>
        <div class="container">
            <!-- Deskripsi Daftar Buku -->
            <div class="daftar-buku">
                <div class="judul">
                    <p>Daftar Bacaan</p>
                </div>
                <div class="ava">
                    <img src="{{ asset('img/GambarGede.jpg') }}" alt="">
                </div>
                <div class="deskripsi-buku">
                    <h4>sadboy</h4>
                    <span class="jam jam-pencil-f icon-pensil"></span>
                    <p>Pribadi</p>
                    <p class="jumlah-buku">9 buku</p>
                    <p><span class="jam jam-heart-f icon-like"></span> 999 suka</p>
                    <hr>
                    <p class="deskrip-buku">Lorem ipsum dolor sit amet consectetur adipisicing elit. In necessitatibus quis minima placeat. Ipsam neque dolor voluptate est recusandae quasi. Libero, corporis dolorem! Fuga animi rem doloremque iusto. Doloribus, ullam?</p>
                </div>
                <div class="bagikan-daftar">
                    <div>
                        <div class="icon-profil">
                            <p class="align-middle">R</p>
                        </div>
                        <span class="nama-profil">Rafli Farhan Naji</span>
                        <hr>
                    </div>
                    <p>Bagikan Daftar Bacaan</p>
                    <div class="lg-sosmed">
                        <span class="jam jam-facebook sosmed"></span>
                        <span class="jam jam-twitter sosmed"></span>
                        <span class="jam jam-instagram sosmed"></span>
                        <span class="jam jam-link sosmed"></span>
                    </div>
                </div>
                
            </div>
            <!-- End Deskripsi Daftar Buku -->
            <!-- Daftar Isi -->
            <div class="daftar-isi">
                <div class="judul-daftar"><h4>Daftar Isi</h4></div>
                
                <!-- Kontent -->
                <div id="penampung-konten">
                </div>

            </div>
            <!-- End Daftar Isi -->
            
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
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/babel">
            class KontenCard extends React.Component {
                render() {
                    return(
                        <div className="konten">
                            <div className="img">
                                <img src={this.props.urlgambar} alt=""/>
                            </div>
                            <div className="deskripsi">
                                <div className="judul-deskripsi">
                                    <h4>{this.props.judulbuku}</h4>
                                    
                                </div>
                                <div className="isi-deskripsi">
                                    <p><span className="warna-genbookz">{this.props.suka}% Cocok</span> {this.props.tglrilis} {this.props.genre}</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur eius exercitationem, at dolores tenetur, consectetur numquam animi blanditiis odit fugit hic. Delectus iure distinctio animi dicta beatae ut laborum sint.</p>
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

            class KumpulanKC extends React.Component {
                render() {
                    return(
                        <div className="penampung-konten">
                            <KontenCard 
                                judulbuku = 'asu'
                                urlgambar = "{{ asset('img/GambarCilik.jpg') }}"
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

            ReactDOM.render(<KumpulanKC />, document.getElementById("penampung-konten"));
        </script>
    </body>
</html>