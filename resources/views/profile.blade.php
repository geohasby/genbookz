<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Jam Icon -->
        <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

        <!-- My CSS -->
        <link rel="stylesheet" href="{{ asset('css/profil.css') }}">

        <!-- Font Style -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

        <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

        <title>Profil</title>
    </head>
    <body onload="FotoAva()">
        <div class="container">
            
            <!-- Profil -->
            <div class="profil">
                <div class="prof-jdl">
                    <h4>Profil</h4>
                    <a href="{{ route('setting.edit_profile') }}" class="tbl_pensil">
                        <span class="jam jam-pencil-f"></span>
                    </a>
                </div>
                <div class="konten-prof">
                    <div class="icon_profil" id="divFotoAva">
                        <img src="{{ asset('img/ava/' . $user->avatar) }}" alt="" id="fotoAva">
                    </div>
                    <div class="prof-isi">
                        <div class="keterangan">
                            <p class="username">{{$user->name}}</p>
                            <p style="color: gray;">{{'@' . $user->username}}</p>
                            <p><span class="jam jam-map-marker-f"></span> {{$user->country}}</p>
                            <p><span class="jam jam-calendar-alt"></span> Bergabung {{$user->created_at}}</p>
                        </div>
                    </div>
                    <div class="tombolIkuti">
                        <button type="button" class="btn tbl_ikuti shadow-none">IKUTI</button>
                    </div>
                    <hr>
                    <div class="ikuti">
                        <button type="button" id="btn-db" class="btn tbl_opsi shadow-none" style="overflow: hidden; white-space: nowrap;">
                            <p class="jml-db">2</p> 
                            <p>Daftar Bacaan</p>
                        </button>
                        <button type="button" id="btn-flwg" class="btn tbl_opsi shadow-none">
                            <p class="jml-flwg">23</p> 
                            <p>Mengikuti</p>
                        </button>
                        <button type="button" id="btn-flwr" class="btn tbl_opsi shadow-none">
                            <p class="jml-flwr">167</p> 
                            <p>Pengikut</p>
                        </button>
                    </div>
                    <hr>
                    <div class="bagikan-profil">
                        <p>Bagikan Profil</p>
                        <div class="lg-sosmed">
                            <span class="jam jam-facebook sosmed"></span>
                            <span class="jam jam-twitter sosmed"></span>
                            <span class="jam jam-instagram sosmed"></span>
                            <span class="jam jam-link sosmed"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Profil -->

            <!-- Daftar Bacaan -->
            <div class="konten-all">
                <div class="judul-konten">
                    <h5>Daftar Bacaan</h5>
                </div>
                
                <div class="isi-konten">
                    <div class="isi-konten-db" id="isi-konten-db">
                    </div>
                    <div class="prof-hilangkan" id="isi-konten-flwg">
                    </div>
                    <div class="prof-hilangkan" id="isi-konten-flwr"></div>
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
        <script src="{{ asset('js/ava-img.js') }}"></script>
        <script type="text/javascript">
            const btnIkuti = document.getElementsByClassName('tbl_ikuti')[0];
            const statIkuti = btnIkuti.innerHTML;
            const divKonten = document.getElementsByClassName('konten-all')[0];
            const heightLayar = window.innerHeight;
            const judulKonten = document.querySelector('.judul-konten h5');
            const btnDb = document.getElementById('btn-db');
            const btnFlwg = document.getElementById('btn-flwg');
            const btnFlwr = document.getElementById('btn-flwr');
            const kontenDb = document.getElementsByClassName('isi-konten-db')[0];
            const kontenFlwg = document.getElementById('isi-konten-flwg');
            const kontenFlwr = document.getElementById('isi-konten-flwr');

            if (window.innerWidth > 768) {
                divKonten.style.height = heightLayar + 'px';
            };

            btnDb.addEventListener('click', function(){
                judulKonten.innerHTML = "Daftar Bacaan";
                btnDb.style.borderColor = '#ff00ff';
                btnDb.style.color = '#ff00ff';
                btnFlwg.style.borderColor = '#000';
                btnFlwg.style.color = '#000';
                btnFlwr.style.borderColor = '#000';
                btnFlwr.style.color = '#000';
                kontenDb.classList.remove('prof-hilangkan');
                kontenFlwg.classList.add('prof-hilangkan');
                kontenFlwr.classList.add('prof-hilangkan');
            });
            btnFlwg.addEventListener('click', function () {
                judulKonten.innerHTML = "Mengikuti";
                btnFlwg.style.borderColor = '#ff00ff';
                btnFlwg.style.color = '#ff00ff';
                btnDb.style.borderColor = '#000';
                btnDb.style.color = '#000';
                btnFlwr.style.borderColor = '#000';
                btnFlwr.style.color = '#000';
                kontenDb.classList.add('prof-hilangkan');
                kontenFlwg.classList.remove('prof-hilangkan');
                kontenFlwr.classList.add('prof-hilangkan');
            });
            btnFlwr.addEventListener('click', function () {
                judulKonten.innerHTML = "Pengikut";
                btnFlwr.style.borderColor = '#ff00ff';
                btnFlwr.style.color = '#ff00ff';
                btnFlwg.style.borderColor = '#000';
                btnFlwg.style.color = '#000';
                btnDb.style.borderColor = '#000';
                btnDb.style.color = '#000';
                kontenDb.classList.add('prof-hilangkan');
                kontenFlwg.classList.add('prof-hilangkan');
                kontenFlwr.classList.remove('prof-hilangkan');
            });
            

            btnIkuti.addEventListener('click', function() {
                if(btnIkuti.innerHTML === statIkuti){
                    btnIkuti.innerHTML = 'MENGIKUTI';
                    btnIkuti.style.backgroundColor = '#ff00ff';
                    btnIkuti.style.color = '#fff';
                    btnIkuti.style.borderColor = '#ff00ff';
                } else {
                    btnIkuti.innerHTML = 'IKUTI';
                    btnIkuti.style.backgroundColor = '#fff';
                    btnIkuti.style.color = '#ff00ff';
                }
            });
        </script>
        <script type="text/babel">

            // Other card profile
            class CardProfOther extends React.Component {
                render() {
                    return(
                        <a href="" className="card-prof-other" type="button">
                            <div className="cont-img-card">
                                <img src={this.props.gmbrother} alt=""/>
                            </div>
                            <div className="cont-username-prof">
                                <p>{this.props.usernameother}</p>
                            </div>
                            <div className="cont-name-prof">
                                <p>{this.props.nameother}</p>
                            </div>
                            <div className="btn-flw-card">
                                {this.props.btnother}
                            </div>
                        </a>
                    )
                }
            };

            CardProfOther.defaultProps = {
                usernameother : 'Username',
                nameother : 'Nama Lengkap',
                gmbrother : "{{ asset('img/ava/default.jpg') }}",
                btnother : <button className="btn btn-sm btn-prof-other">Ikuti</button>
            }

            class KumpulanCPO extends React.Component {
                render() {
                    return(
                        <div className="isi-konten-flw">
                            <CardProfOther />
                            <CardProfOther />
                            <CardProfOther />
                            <CardProfOther />
                        </div>
                    )
                }
            };

            class KumpulanCPO1 extends React.Component {
                    render() {
                        return (
                            <div className="isi-konten-flw">
                                <CardProfOther 
                                    btnother= ''
                                />
                                <CardProfOther
                                    btnother=''
                                />
                                <CardProfOther
                                    btnother=''
                                />
                                <CardProfOther
                                    btnother=''
                                />
                            </div>
                        )
                    }
                };



            ReactDOM.render(<KumpulanCPO1 />, document.getElementById('isi-konten-flwg'));
            ReactDOM.render(<KumpulanCPO />, document.getElementById('isi-konten-flwr'));

            //Readlist component
            class CardReadlist extends React.Component {
                render() {
                    return(
                        <div className="daftar_bacaan">

                            <div className="tumbnail">
                                <p>{this.props.namadb}</p>
                                <div className="tumbnail_df">
                                    <img src={this.props.gmbrcoverdb} alt=""/>
                                </div>
                                    <p className="like"><span className="jam jam-heart-f"></span> {this.props.jmlhsuka} suka</p>
                                </div>
                                <div className="list_buku">
                                    <p>{this.props.jmlhbukuisi} Buku</p>
                                    <div className="img-listbuku">
                                    <div className="tumbnail-buku">
                                        <img src={this.props.gmbrbuku} alt="" width="110"/>
                                    </div>
                                </div>
                                <div className="d-inline-block gradien"></div>
                            </div>
                        </div>
                    )
                }
            };

            CardReadlist.defaultProps = {
                namadb : "Nama",
                gmbrcoverdb : "{{ asset('img/default-coverdb.png') }}",
                jmlhsuka : 0,
                jmlhbukuisi : 1,
                gmbrbuku : "{{ asset('img/default-img.jpg') }}"
            };

            class KumpulanCRL extends React.Component {
                render() {
                    return(
                        <div className="isi-konten-db">
                            <CardReadlist />
                            <hr/>
                            <CardReadlist />
                            <hr/>
                        </div>
                    )
                }
            };

            ReactDOM.render(<KumpulanCRL />, document.getElementById('isi-konten-db'));
        </script>
    </body>
</html>