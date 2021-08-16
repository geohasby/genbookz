<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengaturan.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Pengaturan Profil</title>
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
                <a href="#" type="button" class="btn-on btn btn-secondary shadow-none"><i class="fas fa-user judul-ico"></i>Edit Profil</a>
                <hr>
                <a href="{{ route('setting.change_password') }}" type="button" class="btn btn-secondary shadow-none"><i class="fas fa-key judul-ico"></i>Ubah Kata Sandi</a>
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
                <div class="judul-sub">Pengaturan Profil</div>
                <form method="POST" action="{{ route('setting.update_profile') }}" enctype="multipart/form-data" class="cont-prof">
                    @method('patch')
                    @csrf

                    <div class="judul-form">
                        <div id="isiAva" class="foto-prof">
                            <img class="foto-p" src="{{ asset('img/ava/' . old('avatar', $user->avatar)) }}" alt="foto profil">
                        </div>
                        <div><label class="judulf" for="username">Nama Pengguna</label></div>
                        <div><label class="judulf" for="email">Email</label></div>
                        <div><label class="judulf" for="name">Nama Lengkap</label></div>
                        <div><label class="judulf" for="phone_number">Nomor HP</label></div>
                        <div><label class="judulf" for="country">Negara</label></div>
                        <div><label class="judulf" for="date_of_birth">Tanggal Lahir</label></div>
                        <div><label class="judulf" for="gender">Jenis Kelamin</label></div>
                    </div>
                    <div class="isi-form">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="avatar" name="avatar" accept=".jpg,.jpeg,.png" hidden="hidden">
                            <button type="button" class="btn btn-primary shadow-none" id="btn-input">Pilih file</button>
                            <span id="custom-txt">Tidak ada file yang dipilih</span>

                            @error('avatar')
                            <span class="invalid-feedback error-image" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group form-prof">
                            <input id="username" type="text" readonly class="form-control form-control-sm @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username) }}" autocomplete="username" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" readonly class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email" required>
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="phone_number" type="text" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" autocomplete="phone_number">
                            
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select id="country" class="form-control form-control-sm" name="country" value="{{ old('country', $user->country) }}">
                                <option value=""></option>
                                <option value="{{ old('country', $user->country) }}" selected>{{ old('country', $user->country) }}</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>

                        <div class="form-group form-ttl">
                            <input id="date_of_birth" type="date" class="form-control form-d form-control-sm" name="date_of_birth" value="{{ old('date_of_birth', $user->date_of_birth) }}" min="1900-01-01" max="2020-12-31">
                        </div>

                        <div class="form-group">
                            <select id="gender" class="form-control form-control-sm" name="gender">
                                @if($user->gender == 'male')
                                <option value=""></option>
                                <option value="male" selected>Laki-laki</option>
                                <option value="female">Perempuan</option>
                                @elseif($user->gender == 'female')
                                <option value=""></option>
                                <option value="male">Laki-laki</option>
                                <option value="female" selected>Perempuan</option>
                                @else
                                <option value="" selected></option>
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary shadow-none btn-input">Simpan</button>
                        </div>
                    </div>
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
    <script type="text/javascript">
        const inputFile = document.getElementById('avatar');
        const btnInput = document.getElementById('btn-input');
        const txtInput = document.getElementById('custom-txt');
        const isiAva = document.getElementById('isiAva');
        let ava = isiAva.querySelector('.foto-p');

        for (let i = 10; i < 10000; i += 10){
            setTimeout(() => {
                if(ava.clientHeight > ava.clientWidth) {
                    ava.style.width = '100%';
                    ava.style.height = 'auto';
                    ava.style.maxWidth = 'unset';
                    ava.style.maxHeight = 'unset';
                } else if(ava.clientHeight < ava.clientWidth) {
                    ava.style.width = 'auto';
                    ava.style.height = '100%';
                    ava.style.maxWidth = 'unset';
                    ava.style.maxHeight = 'unset';
                } else if(ava.clientHeight = ava.clientWidth){
                    ava.style.maxWidth = '100%';
                    ava.style.maxHeight = '100%';
                    ava.style.width = 'auto';
                    ava.style.height = 'auto';
                }
            }, i);
        }
            
        btnInput.addEventListener('click', function () {
            inputFile.click();
        });

        inputFile.addEventListener('change', function () {
            if (inputFile.value) {
                txtInput.innerHTML = inputFile.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
            } else {
                txtInput.innerHTML = 'Tidak ada file yang dipilih';
            };

            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function () {
                    ava.setAttribute('src', this.result);
                });

                reader.readAsDataURL(file);
            };

            setTimeout(() => {
                console.log(file);
                if(ava.clientHeight > ava.clientWidth) {
                    ava.style.width = '100%';
                    ava.style.height = 'auto';
                    ava.style.maxWidth = 'unset';
                    ava.style.maxHeight = 'unset';
                } else if(ava.clientHeight < ava.clientWidth) {
                    ava.style.width = 'auto';
                    ava.style.height = '100%';
                    ava.style.maxWidth = 'unset';
                    ava.style.maxHeight = 'unset';
                } else if(ava.clientHeight = ava.clientWidth){
                    ava.style.maxWidth = '100%';
                    ava.style.maxHeight = '100%';
                    ava.style.width = 'auto';
                    ava.style.height = 'auto';
                }
            }, 10);
        });
        
    </script>
</body>

</html>