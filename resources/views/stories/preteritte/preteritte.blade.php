<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/preteritte.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <script src="{{ asset('js/react.development.js') }}"></script>
    <script src="{{ asset('js/react-dom.development.js') }}"></script>
    <script src="{{ asset('js/babel.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/7577cf56de.js" crossorigin="anonymous"></script>
    <title>Preteritte</title>
</head>

<body>
    <div class="container1">
        <div class="hero-img">
            <div class="efek-img"></div>
            <img src="{{ asset('img/cover-web-buku.jpg') }}" alt="" id="img-hero">
        </div>
        <div class="konten-buku">
            <div class="judul-buku">Preteritte</div>
            <div class="kiri-buku">
                <div class="ket-buku">
                    <div class="ket-atas">
                        <p class="genre">Misteri, Drama, Romantis</p>
                        <p class="thn-rilis">Agustus 2020</p>
                        <div class="btn-buku">
                            <a type="button" href="#" class="btn btn-suka shadow-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path fill-rule="evenodd"
                                        d="M4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.565 20.565 0 008 13.393a20.561 20.561 0 003.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.75.75 0 01-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5zM8 14.25l-.345.666-.002-.001-.006-.003-.018-.01a7.643 7.643 0 01-.31-.17 22.075 22.075 0 01-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.08 22.08 0 01-3.744 2.584l-.018.01-.006.003h-.002L8 14.25zm0 0l.345.666a.752.752 0 01-.69 0L8 14.25z">
                                    </path>
                                </svg>
                                <span>Suka</span>
                            </a>
                            <a type="button" href="#" class="btn btn-tdb shadow-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.75 4.75a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z">
                                    </path>
                                </svg>
                                <span>Tambahkan bacaan</span>
                            </a>
                            <a href="{{ url('story/preteritte/1') }}" type="button" class="btn btn-baca d-block shadow-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM6.379 5.227A.25.25 0 006 5.442v5.117a.25.25 0 00.379.214l4.264-2.559a.25.25 0 000-.428L6.379 5.227z">
                                    </path>
                                </svg>
                                <span>Baca</span>
                            </a>
                        </div>
                    </div>
                    <div class="ket-bawah">
                        <div class="sinopsis">
                            <p class="jdl-sinopsis">Sinopsis</p>
                            <p class="isi-sinopsis">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ad debitis consectetur sapiente quibusdam, cupiditate officiis tempore facilis animi ut reprehenderit. Sunt aliquid officia impedit, molestias consequatur neque esse? A laboriosam saepe voluptatibus distinctio ducimus iusto cum voluptatem necessitatibus sit nisi, dolorem delectus nihil alias minus non repellendus quia ea!</p>
                        </div>
                        <div class="tokoh-buku">
                            <p class="jdl-tokoh">Tokoh</p>
                            <p class="isi-tokoh">Tina, Alex, Roni</p>
                        </div>
                        <div class="rate-share-hp">
                            <div class="rate-share-hp">
                                <div class="rate-buku">
                                    <p class="jdl-rate">Berikan Penilaian</p>
                                    <span class="ratings-hp">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <span><input id="rating-value-hp" value="0" readonly>/5</span>
                                </div>
                                <div class="share-buku">
                                    <p class="jdl-share">Bagikan</p>
                                    {!! $fb !!}
                                    {!! $tw !!}
                                    {!! $wa !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isi-buku" id="isi-buku"></div>
            </div>
            <div class="kanan-buku">
                <div class="rate-share">
                    <div class="rate-buku">
                        <p class="jdl-rate">Berikan Penilaian</p>
                        <span class="ratings">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                        <span><input id="rating-value" value="0" readonly>/5</span>
                    </div>
                    <div class="share-buku">
                        <p class="jdl-share">Bagikan</p>
                        {!! $fb !!}
                        {!! $tw !!}
                        {!! $wa !!}
                    </div>
                </div>
                <div class="rec-buku-lain" id="rec-buku-lain"></div>
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
    <script src="{{ asset('js/share.js') }}"></script>
    <script type="text/babel">
        class CardChapter extends React.Component {
            render() {
                return(
                    <a className="card-chapter d-block" href={this.props.link}>
                        <p className="jdl-chapter">Chapter {this.props.angka} : {this.props.judul}</p>
                        <div className="isi-chapter">
                            <img src={this.props.img} alt=""/>
                            <div className="desc-chapt">
                                <p className="deskripsi-bagian">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit culpa dolorum ipsam labore reiciendis, iusto impedit! Neque pariatur cum ipsum. Odio quis ut inventore voluptatum!</p>
                                <p className="tgl-chapter">{this.props.rilis}</p>
                            </div>
                        </div>
                    </a>
                )
            }
        };

        CardChapter.defaultProps = {
            angka: 0,
            judul: 'Judul Chapter',
            img: "{{ asset('img/chap-b1.jpg') }}",
            rilis: '(30-08-2020)',
            link: '#'
        };

        class KumpulanCC extends React.Component {
            render() {
                return(
                    <div>
                        <div className="jdl-isi">Daftar Isi</div>
                        <CardChapter />
                        <CardChapter />
                        <CardChapter />
                    </div>
                )
            }
        };

        ReactDOM.render(<KumpulanCC />, document.getElementById('isi-buku'));
    </script>
    <script type="text/babel">
        class CardRec extends React.Component {
            render(){
                return(
                    <a href={this.props.link} className="card-rec">
                        <div className="img-rec">
                            <img src={this.props.img} alt=""/>
                            <div className="ket-rec-hp">
                                <div className="jdl-buku-rec">{this.props.judul}</div>
                                <div className="rilis-rec">{this.props.thnrilis}</div>
                            </div>
                        </div>
                        <div className="ket-rec">
                            <div className="jdl-buku-rec">{this.props.judul}</div>
                            <div className="cocok-rilis-genre">
                                <span className="rec-cocok">{this.props.cocok}% Cocok</span>
                                <span> {this.props.rilis}</span>
                                <span> {this.props.genre}</span>
                            </div>
                            <div className="deskripsi-rec">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ipsam, quam quod sed nemo sit numquam veritatis deleniti natus, fugiat provident accusamus mollitia hic repellendus nobis? Suscipit distinctio nulla non?
                            </div>
                        </div>
                    </a>
                )
            }
        };

        CardRec.defaultProps = {
            img: "{{ asset('img/default-img.jpg') }}",
            judul: 'Judul Buku',
            cocok: 0,
            rilis: 'Agustus 2020',
            genre: 'Umum',
            link: '#',
            thnrilis: '2020'
        };

        class KumpulanCR extends React.Component {
            render() {
                return(
                    <div>
                        <div className="jdl-rec">Rekomendasi untuk anda</div>
                        <div className="bungkusCR">
                            <CardRec />
                            <CardRec />
                            <CardRec />
                        </div>
                    </div>
                )
            }
        };

        // if (window.innerWidth > 500) {
            ReactDOM.render(<KumpulanCR />, document.getElementById('rec-buku-lain'));
        // }
        
    </script>
    <script type="text/javascript">
        const btnSuka = document.getElementsByClassName('btn-suka')[0];
        const btnTdb = document.getElementsByClassName('btn-tdb')[0];
        const isiSuka = btnSuka.querySelector('span');
        const isiTdb = btnTdb.querySelector('span');

        btnSuka.addEventListener('click', function(){
            if(isiSuka.innerHTML == 'Suka'){
                btnSuka.style.backgroundColor = '#dd00dd';
                btnSuka.style.color = '#fff';
                btnSuka.style.fill = '#fff';
                isiSuka.innerHTML = 'Disukai';
            } else {
                btnSuka.style.backgroundColor = '#fff';
                btnSuka.style.color = '#dd00dd';
                btnSuka.style.fill = '#dd00dd';
                isiSuka.innerHTML = 'Suka';
            }
        });

        btnTdb.addEventListener('click', function () {
            if (isiTdb.innerHTML == 'Tambahkan bacaan') {
                btnTdb.style.backgroundColor = '#dd00dd';
                btnTdb.style.color = '#fff';
                btnTdb.style.fill = '#fff';
                isiTdb.innerHTML = 'Sudah ditambahkan';
            } else {
                btnTdb.style.backgroundColor = '#fff';
                btnTdb.style.color = '#dd00dd';
                btnTdb.style.fill = '#dd00dd';
                isiTdb.innerHTML = 'Tambahkan bacaan';
            }
        });

        if (window.innerWidth <= 500) {
            const gambarHero = document.getElementById('img-hero');

            gambarHero.style.width = window.innerWidth + 'px';
        }

        if (window.innerWidth > 500) {
            const stars = document.querySelector(".ratings").children;
            const ratingValue = document.querySelector("#rating-value");
            let index;

            for (let i = 0; i < stars.length; i++) {
                stars[i].addEventListener("mouseover", function () {
                    // console.log(i)
                    for (let j = 0; j < stars.length; j++) {
                        stars[j].classList.remove("fas");
                        stars[j].classList.add("far");
                    }
                    for (let j = 0; j <= i; j++) {
                        stars[j].classList.remove("far");
                        stars[j].classList.add("fas");
                    }
                })
                stars[i].addEventListener("click", function () {
                    ratingValue.value = i + 1;
                    index = i;
                })
                stars[i].addEventListener("mouseout", function () {

                    for (let j = 0; j < stars.length; j++) {
                        stars[j].classList.remove("fas");
                        stars[j].classList.add("far");
                    }
                    for (let j = 0; j <= index; j++) {
                        stars[j].classList.remove("far");
                        stars[j].classList.add("fas");
                    }
                })
            }
        } else {
            const starsHP = document.querySelector(".ratings-hp").children;
            const ratingValueHP = document.querySelector("#rating-value-hp");
            let indexHP;

            for (let i = 0; i < starsHP.length; i++) {
                starsHP[i].addEventListener("mouseover", function () {
                    // console.log(i)
                    for (let j = 0; j < starsHP.length; j++) {
                        starsHP[j].classList.remove("fas");
                        starsHP[j].classList.add("far");
                    }
                    for (let j = 0; j <= i; j++) {
                        starsHP[j].classList.remove("far");
                        starsHP[j].classList.add("fas");
                    }
                })
                starsHP[i].addEventListener("click", function () {
                    ratingValueHP.value = i + 1;
                    indexHP = i;
                })
                starsHP[i].addEventListener("mouseout", function () {

                    for (let j = 0; j < starsHP.length; j++) {
                        starsHP[j].classList.remove("fas");
                        starsHP[j].classList.add("far");
                    }
                    for (let j = 0; j <= indexHP; j++) {
                        starsHP[j].classList.remove("far");
                        starsHP[j].classList.add("fas");
                    }
                })
            }
        }

        

        
        
    </script>
</body>

</html>