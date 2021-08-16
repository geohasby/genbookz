@extends('layouts.app')

@section('content')
    <div class="container1">
        <div class="hero">
            <div class="isihero">
                <div class="judulbukuhero">
                    <div class="judulbukuheroutama">PRETERITTE</div>
                    <div class="judulbukuherokedua text-center">kenangan masa lalu</div>
                </div>
                <div class="ratingbukuhero text-center">
                    <span>100% Cocok</span> Agustus 2020 Drama Misteri
                </div>
                <div class="deskripsibukuhero"><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil minima saepe ad a deleniti omnis ea, labore minus dignissimos eos. Commodi totam molestias voluptate placeat. Voluptatum earum ducimus nulla modi, labore consectetur? Dolorum corporis earum eos debitis aliquid laudantium accusantium.<br><br></div>
                <div class="buttonhero">
                    <!-- <div class="likehero">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M6.736 4C4.657 4 2.5 5.88 2.5 8.514c0 3.107 2.324 5.96 4.861 8.12a29.66 29.66 0 004.566 3.175l.073.041.073-.04c.271-.153.661-.38 1.13-.674.94-.588 2.19-1.441 3.436-2.502 2.537-2.16 4.861-5.013 4.861-8.12C21.5 5.88 19.343 4 17.264 4c-2.106 0-3.801 1.389-4.553 3.643a.75.75 0 01-1.422 0C10.537 5.389 8.841 4 6.736 4zM12 20.703l.343.667a.75.75 0 01-.686 0l.343-.667zM1 8.513C1 5.053 3.829 2.5 6.736 2.5 9.03 2.5 10.881 3.726 12 5.605 13.12 3.726 14.97 2.5 17.264 2.5 20.17 2.5 23 5.052 23 8.514c0 3.818-2.801 7.06-5.389 9.262a31.146 31.146 0 01-5.233 3.576l-.025.013-.007.003-.002.001-.344-.666-.343.667-.003-.002-.007-.003-.025-.013A29.308 29.308 0 0110 20.408a31.147 31.147 0 01-3.611-2.632C3.8 15.573 1 12.332 1 8.514z">
                            </path>
                        </svg>
                    </div> -->
                    <div class="readhero">
                        <a type="button" href="{{ url('story/preteritte') }}" class="shadow-none btn btn-link">BACA</a>
                    </div>
                    <!-- <div class="tambahdbhero">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M11.75 4.5a.75.75 0 01.75.75V11h5.75a.75.75 0 010 1.5H12.5v5.75a.75.75 0 01-1.5 0V12.5H5.25a.75.75 0 010-1.5H11V5.25a.75.75 0 01.75-.75z">
                            </path>
                        </svg>
                    </div> -->
                </div>
            </div>
            <div class="gambarbackdrop">
                <div class="grad-back"></div>
                <img src="{{ asset('img/backdrop-preteritte.jpg') }}" alt="">
            </div>
        </div>
        <div class="isibuku">
            <div class="bukurekomen">
                <div class="judul-rec">Rekomendasi untuk kamu</div>
                <div id="contCard">
                </div>
            </div>
            <div class="bukuterbaru"></div>
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

    <script type="text/javascript">
        const btnLike = document.getElementsByClassName('likehero')[0];
        const btnPlus = document.getElementsByClassName('tambahdbhero')[0];
        const svgBtnLike = btnLike.querySelector('svg');
        const svgBtnPlus = btnPlus.querySelector('svg');

        btnLike.addEventListener('click', function(){
            btnLike.style.backgroundColor = '#ff00ff';
            btnLike.style.border = '1px solid #ff0fff';
            svgBtnLike.style.fill = '#fff';
            btnLike.style.transition = '.5s';
        });

        btnPlus.addEventListener('click', function () {
            btnPlus.style.backgroundColor = '#ff00ff';
            btnPlus.style.border = '1px solid #ff0fff';
            svgBtnPlus.style.fill = '#fff';
            btnPlus.style.transition = '.5s';
        });

    </script>
    <script type="text/babel">

        class HomeCard extends React.Component {
            render() {
                return(
                    <a className="home-card" href={this.props.link}>
                        <div className="bungkusimg">
                            <img src={this.props.gmbr} alt="" className="img-card-home"/>
                        </div>
                        <p className="judul-card-home">{this.props.judul}</p>
                        <p className="rilis-card-home">{this.props.rilis}</p>
                    </a>
                )
            }
        };

        HomeCard.defaultProps = {
            link: "#",
            gmbr: "{{ asset('img/default-img.jpg') }}",
            judul: 'Tambahkan buku',
            rilis: ''
        };

        class HomeCardRec extends React.Component {
            render() {
                return(
                    <div className='contCard'>
                        <HomeCard
                            link="{{ url('story/preteritte') }}" 
                            judul='Preteritte'
                            gmbr= "{{ asset('img/Gambar.png') }}"
                            rilis='2020'
                        />
                        <HomeCard />
                        <HomeCard />
                        <HomeCard />
                        <HomeCard />
                        <HomeCard />
                        <HomeCard />
                    </div>
                )
            }
        }

        ReactDOM.render(<HomeCardRec />, document.getElementById('contCard'));
    </script>
@endsection