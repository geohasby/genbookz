<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preteritte_1.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <script src="{{ asset('js/react.development.js') }}"></script>
    <script src="{{ asset('js/react-dom.development.js') }}"></script>
    <script src="{{ asset('js/babel.min.js') }}"></script>
    <script src="{{ asset('js/font-awesome.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/ava-img.js') }}"></script>
    <title>Baca Pretteritte</title>
</head>

<body onload="FotoAva()">
    <nav class="navbar-baca">
        <div class="nav-kiri">
            <button class="btn shadow-none btn-back">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill-rule="evenodd"
                        d="M15.28 5.22a.75.75 0 00-1.06 0l-6.25 6.25a.75.75 0 000 1.06l6.25 6.25a.75.75 0 101.06-1.06L9.56 12l5.72-5.72a.75.75 0 000-1.06z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="navbar-center">
            <div class="judul-penulis">
                <p class="judul-buku">Preteritte</p>
                <p class="penulis-buku text-center">Juliettt</p>
            </div>
        </div>
        <div class="navbar-kanan">
            <button class="btn shadow-none btn-share">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill-rule="evenodd"
                        d="M20 5.5a3.5 3.5 0 01-6.062 2.385l-5.112 3.021a3.497 3.497 0 010 2.188l5.112 3.021a3.5 3.5 0 11-.764 1.29l-5.112-3.02a3.5 3.5 0 110-4.77l5.112-3.021v.001A3.5 3.5 0 1120 5.5zm-1.5 0a2 2 0 11-4 0 2 2 0 014 0zM5.5 14a2 2 0 100-4 2 2 0 000 4zm13 4.5a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </button>
            <button class="btn shadow-none btn-vol" onclick="klikVolume()">
                <i class="fas fa-volume-up"></i>
            </button>
            <button class="btn shadow-none btn-list" onclick="klikList()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path
                        d="M3.604 3.089A.75.75 0 014 3.75V8.5h.75a.75.75 0 010 1.5h-3a.75.75 0 110-1.5h.75V5.151l-.334.223a.75.75 0 01-.832-1.248l1.5-1a.75.75 0 01.77-.037zM8.75 5.5a.75.75 0 000 1.5h11.5a.75.75 0 000-1.5H8.75zm0 6a.75.75 0 000 1.5h11.5a.75.75 0 000-1.5H8.75zm0 6a.75.75 0 000 1.5h11.5a.75.75 0 000-1.5H8.75zM5.5 15.75c0-.704-.271-1.286-.72-1.686a2.302 2.302 0 00-1.53-.564c-.535 0-1.094.178-1.53.565-.449.399-.72.982-.72 1.685a.75.75 0 001.5 0c0-.296.104-.464.217-.564A.805.805 0 013.25 15c.215 0 .406.072.533.185.113.101.217.268.217.565 0 .332-.069.48-.21.657-.092.113-.216.24-.403.419l-.147.14c-.152.144-.33.313-.52.504l-1.5 1.5a.75.75 0 00-.22.53v.25c0 .414.336.75.75.75H5A.75.75 0 005 19H3.31l.47-.47c.176-.176.333-.324.48-.465l.165-.156a5.98 5.98 0 00.536-.566c.358-.447.539-.925.539-1.593z">
                    </path>
                </svg>
            </button>
            <button class="btn shadow-none btn-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill-rule="evenodd"
                        d="M4.75 4.5a.25.25 0 00-.25.25v3.5a.75.75 0 01-1.5 0v-3.5C3 3.784 3.784 3 4.75 3h3.5a.75.75 0 010 1.5h-3.5zM15 3.75a.75.75 0 01.75-.75h3.5c.966 0 1.75.784 1.75 1.75v3.5a.75.75 0 01-1.5 0v-3.5a.25.25 0 00-.25-.25h-3.5a.75.75 0 01-.75-.75zM3.75 15a.75.75 0 01.75.75v3.5c0 .138.112.25.25.25h3.5a.75.75 0 010 1.5h-3.5A1.75 1.75 0 013 19.25v-3.5a.75.75 0 01.75-.75zm16.5 0a.75.75 0 01.75.75v3.5A1.75 1.75 0 0119.25 21h-3.5a.75.75 0 010-1.5h3.5a.25.25 0 00.25-.25v-3.5a.75.75 0 01.75-.75z">
                    </path>
                </svg>
            </button>
        </div>
    </nav>

    <nav class="nb-hp">
        <button class="btn shadow-none btn-share-hp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill-rule="evenodd"
                    d="M20 5.5a3.5 3.5 0 01-6.062 2.385l-5.112 3.021a3.497 3.497 0 010 2.188l5.112 3.021a3.5 3.5 0 11-.764 1.29l-5.112-3.02a3.5 3.5 0 110-4.77l5.112-3.021v.001A3.5 3.5 0 1120 5.5zm-1.5 0a2 2 0 11-4 0 2 2 0 014 0zM5.5 14a2 2 0 100-4 2 2 0 000 4zm13 4.5a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
            </svg>
        </button>
        <button class="btn shadow-none btn-list-hp" onclick="klikList()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path
                    d="M3.604 3.089A.75.75 0 014 3.75V8.5h.75a.75.75 0 010 1.5h-3a.75.75 0 110-1.5h.75V5.151l-.334.223a.75.75 0 01-.832-1.248l1.5-1a.75.75 0 01.77-.037zM8.75 5.5a.75.75 0 000 1.5h11.5a.75.75 0 000-1.5H8.75zm0 6a.75.75 0 000 1.5h11.5a.75.75 0 000-1.5H8.75zm0 6a.75.75 0 000 1.5h11.5a.75.75 0 000-1.5H8.75zM5.5 15.75c0-.704-.271-1.286-.72-1.686a2.302 2.302 0 00-1.53-.564c-.535 0-1.094.178-1.53.565-.449.399-.72.982-.72 1.685a.75.75 0 001.5 0c0-.296.104-.464.217-.564A.805.805 0 013.25 15c.215 0 .406.072.533.185.113.101.217.268.217.565 0 .332-.069.48-.21.657-.092.113-.216.24-.403.419l-.147.14c-.152.144-.33.313-.52.504l-1.5 1.5a.75.75 0 00-.22.53v.25c0 .414.336.75.75.75H5A.75.75 0 005 19H3.31l.47-.47c.176-.176.333-.324.48-.465l.165-.156a5.98 5.98 0 00.536-.566c.358-.447.539-.925.539-1.593z">
                </path>
            </svg>
        </button>
        <button class="btn shadow-none btn-vol-hp" onclick="klikVolume()">
            <i class="fas fa-volume-up"></i>
        </button>
    </nav>

    <div class="container1">
        <div class="jdl-no text-center">
            <p class="no-chap">Chapter 2</p>
            <p class="jdl-chap">Aku Bukan Yang Dulu</p>
        </div>
        <div class="isi-chapter">
            <div class="bungkus-img">
                <img src="{{ asset('img/img-baca1.jpg') }}" alt="">
            </div>
            <div class="bungkus-crita">
                <div class="ct-1" onclick="klikKomenPHP()">
                    <p class="">
                        Lorem ipsum dolor sit, ametS consectetur adipisicing elit. Delectus molestias neque voluptates, dolore cupiditate at?
                        Totam animi nihil neque. Rem veritatis nobis ab iste debitis, similique iusto, consequuntur eveniet libero repellendus
                        ad repudiandae magni minus maiores quasi quae officiis a!
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-2">
                    <p class="">
                        "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, fuga."
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, veniam. Maiores magnam sint illo voluptatibus.
                        Magnam repudiandae est quas ex sint asperiores nobis quod accusamus nulla quaerat. Nisi, recusandae ad!
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi placeat accusamus enim iusto accusantium, at incidunt
                        obcaecati quas repudiandae id laborum! Quasi ratione dolorem blanditiis.
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-2">
                    <p class="">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit."
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit, ametS consectetur adipisicing elit. Delectus molestias neque voluptates, dolore
                        cupiditate at? Totam animi nihil neque. Rem veritatis nobis ab iste debitis, similique iusto, consequuntur eveniet
                        libero repellendus ad repudiandae magni minus maiores quasi quae officiis a!
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="bungkus-img">
                <img src="{{ asset('img/img-baca1.jpg') }}" alt="">
            </div>
            <div class="bungkus-crita">
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit, ametS consectetur adipisicing elit. Delectus molestias neque voluptates, dolore
                        cupiditate at?
                        Totam animi nihil neque. Rem veritatis nobis ab iste debitis, similique iusto, consequuntur eveniet libero
                        repellendus
                        ad repudiandae magni minus maiores quasi quae officiis a!
                    </p>
                    <button class="btn shadow-none kmn-ct" onclick="klikKomenP()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-2">
                    <p class="">
                        "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, fuga."
                    </p>
                    <button class="btn shadow-none kmn-ct">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, veniam. Maiores magnam sint illo
                        voluptatibus.
                        Magnam repudiandae est quas ex sint asperiores nobis quod accusamus nulla quaerat. Nisi, recusandae ad!
                    </p>
                    <button class="btn shadow-none kmn-ct">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi placeat accusamus enim iusto accusantium, at
                        incidunt
                        obcaecati quas repudiandae id laborum! Quasi ratione dolorem blanditiis.
                    </p>
                    <button class="btn shadow-none kmn-ct">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-2">
                    <p class="">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit."
                    </p>
                    <button class="btn shadow-none kmn-ct">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="ct-1">
                    <p class="">
                        Lorem ipsum dolor sit, ametS consectetur adipisicing elit. Delectus molestias neque voluptates, dolore
                        cupiditate at? Totam animi nihil neque. Rem veritatis nobis ab iste debitis, similique iusto, consequuntur
                        eveniet
                        libero repellendus ad repudiandae magni minus maiores quasi quae officiis a!
                    </p>
                    <button class="btn shadow-none kmn-ct">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill-rule="evenodd"
                                d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="under-chap" id="komentar">
            <div class="prev-next">
                <a type="button" href="#" class="btn btn-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill-rule="evenodd"
                            d="M15.28 5.22a.75.75 0 00-1.06 0l-6.25 6.25a.75.75 0 000 1.06l6.25 6.25a.75.75 0 101.06-1.06L9.56 12l5.72-5.72a.75.75 0 000-1.06z">
                        </path>
                    </svg>
                    <span>Chapter 1</span>
                </a>
                <a type="button" href="#" class="btn btn-next">
                    <span>Chapter 3</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill-rule="evenodd"
                            d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="komentar">
                <div class="jdl-komen">Komentar</div>
                <form action="{{ route('comment') }}" method="post" class="form-komen">
                    @csrf
                    <div id="divFotoAva">
                        <img src="{{ asset('img/ava/default.jpg') }}" alt="" id="fotoAva">
                    </div>
                    <input type="hidden" name="id" value="{{ $story->id }}" class="form-control">
                    <input type="hidden" name="parent_id" id="parent_id" class="form-control">

                    <div class="kotak-form-komen">
                        <div class="form-group" id="formReplyComment">
                            <label for="">Balas </label>
                            <input type="text" id="replyComment" class="form-control shadow-none" readonly value="">
                        </div>
                        <textarea name="comment" id="comments" class="form-control shadow-none"
                            placeholder="Tulis komentar kamu disini..."></textarea>
                        <button class="btn btn-komen shadow-none">Kirim</button>
                    </div>
                </form>
                <div class="kumpulan-komment">  
                    @foreach ($story->comments as $row)
                        <div class="komentar1" style="display: flex;">
                            <div class="divFotoAva1">
                                <img src="{{ asset('img/ava/default.jpg') }}" alt="" class="fotoAva1">
                            </div>
                            <div class="konten-komen">
                                <p class="tgl-komen">{{ $row->created_at }}</p>
                                <p class="nama-komen">{{ $row->username }}</p>
                                <p class="isi-komen">{{ $row->comment }}</p>
                                <a class="btn btn-balas shadow-none" href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
                                <div id="balasanKomen">
                                    @foreach ($row->child as $val)
                                    <div class="divFotoAva1">
                                        <img src="{{ asset('img/ava/default.jpg') }}" alt="" class="fotoAva1" />
                                    </div>
                                    <div class="konten-komen">
                                        <p class="tgl-komen">{{ $val->created_at }}</p>
                                        <p class="nama-komen">{{ $val->username }}</p>
                                        <p class="isi-komen">{{ $val->comment }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- <form action="" class="form-komen">
                    <div id="divFotoAva">
                        <img src="{{ asset('img/ava-default.png') }}" alt="" id="fotoAva">
                    </div>
                        <div class="kotak-form-komen">
                            <div class="form-group" id="formReplyComment">
                                <label for="">Balas </label>
                                <input type="text" id="replyComment" class="form-control shadow-none" readonly value="">
                            </div>
                            <textarea name="comment" id="comments" class="form-control shadow-none"
                                placeholder="Tulis komentar kamu disini..."></textarea>
                            <button class="btn btn-komen shadow-none">Kirim</button>
                        </div>
                </form> -->
                <!-- <div class="kumpulan-komment" id="kumpulan-komment"> -->
                    <!-- <div class="komentar1" style="display: flex;">
                        <div class="divFotoAva1">
                            <img src="gambar/ava-default.png" alt="" class="fotoAva1">
                        </div>
                        <div class="konten-komen">
                            <p class="nama-komen">Username</p>
                            <p class="isi-komen">mantap bos pokoke koe</p>
                            <button class="btn btn-balas shadow-none">Balas</button>
                        </div>
                    </div> -->
                <!-- </div> -->
            </div>
            <div class="share-rec">
                <div class="rate-share">
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

    <div class="pop-list hilangkan">
        <div class="kotak-list" id="kotak-list">
            <div class="jdl-list">
                <p class="text-center">Preteritte</p>
            </div>
            <div class="list-chap">
                <a href="#" class="d-block">Chapter 1 - Kenangan Masa Lalu</a>
                <a href="#" class="d-block">Chapter 2 - Kenangan Masa Depan</a>
                <a href="#" class="d-block">Chapter 3 - Beban Masa Lalu</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
                <a href="#" class="d-block">Chapter 4 - Beban Masa Depan</a>
            </div>
            <button class="btn shadow-none btn-close-list" onclick="klikList()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill-rule="evenodd"
                        d="M5.72 5.72a.75.75 0 011.06 0L12 10.94l5.22-5.22a.75.75 0 111.06 1.06L13.06 12l5.22 5.22a.75.75 0 11-1.06 1.06L12 13.06l-5.22 5.22a.75.75 0 01-1.06-1.06L10.94 12 5.72 6.78a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <div class="pop-komen hilangkan">
        <div class="kotak-komen-p" id="kotak-komen-p">
            <div class="jdl-komen-p">
                <p>Komentar dalam Paragraf</p>
            </div>
            <div class="kotak-p-dikomen">
                <div style="padding: 6px;">
                    <p>Paragraf yang akan dikomentari</p>
                </div>
                <div class="p-dikomen">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum maxime sapiente facilis fugit porro nesciunt inventore, adipisci sint ab atque animi quisquam ipsa quis dignissimos laudantium! Voluptates inventore dolor enim.</p>
                </div>
            </div>
            <div class="isi-komen-p">
                <form action="" class="form-komen-p">
                    <div id="divFotoAva" style="width: 50px; height: 50px;">
                        <img src="{{ asset('img/ava-default.png') }}" alt="" id="fotoAva" style="width:100%;height:100%">
                    </div>
                    <div class="kotak-form-komen" style="margin: 0 10px; width: 310px;">
                        <textarea name="comment" id="comments" class="form-control shadow-none"
                            placeholder="Tulis komentar kamu disini..."></textarea>
                        <button class="btn btn-komen shadow-none">Kirim</button>
                    </div>
                </form>
                <div class="kumpulan-komen-p"></div>
            </div>
            <button class="btn shadow-none btn-close-list" onclick="klikKomenP()" style="padding: 3px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill-rule="evenodd"
                        d="M5.72 5.72a.75.75 0 011.06 0L12 10.94l5.22-5.22a.75.75 0 111.06 1.06L13.06 12l5.22 5.22a.75.75 0 11-1.06 1.06L12 13.06l-5.22 5.22a.75.75 0 01-1.06-1.06L10.94 12 5.72 6.78a.75.75 0 010-1.06z">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script>
        function balasKomentar(id, title) {
            $('#formReplyComment').show();
            $('#parent_id').val(id)
            $('#replyComment').val(title)
        }
    </script>
    <script type="text/javascript">
        function klikVolume() {
            const btnVol = document.querySelector('.btn-vol i');
            const btnVolHP = document.querySelector('.btn-vol-hp i');
            btnVol.classList.toggle('fa-volume-mute');
            btnVol.classList.toggle('fa-volume-up');
            btnVolHP.classList.toggle('fa-volume-mute');
            btnVolHP.classList.toggle('fa-volume-up');
        };

        let komenP = document.getElementsByClassName('pop-komen')[0];
        let listChap = document.getElementsByClassName('pop-list')[0];

        function klikList() {
            listChap.classList.toggle('hilangkan');
            document.body.classList.toggle('stopscroll');
        };

        function klikKomenPHP() {
            if (window.innerWidth <= 500) {
                komenP.classList.toggle('hilangkan');
                document.body.classList.toggle('stopscroll');
            };
        };
        
        function klikKomenP() {
            komenP.classList.toggle('hilangkan');
            document.body.classList.toggle('stopscroll');
        };
        
        // balas komen
        const replyKomen = document.getElementById('replyComment');
        const formReplyKomen = document.getElementById('formReplyComment');
        const balasKomen = (params) => {
            console.log(replyKomen, formReplyKomen);
            replyKomen.setAttribute('value', params);
            formReplyKomen.style.display = 'flex';
        };

        const btnFullScreen = document.getElementsByClassName('btn-full')[0];
        let pathBtnFull = btnFullScreen.querySelector('svg path');

        function getFullScreen() {
            return document.fullscreenElement
                || document.webkitFullscreenElement
                || document.mozFullscreenElement
                || document.msFullscreenElement;
        };

        btnFullScreen.addEventListener("click", ()=> {
            if (getFullScreen()) {
                document.exitFullscreen();
                pathBtnFull.setAttribute('d', "M4.75 4.5a.25.25 0 00-.25.25v3.5a.75.75 0 01-1.5 0v-3.5C3 3.784 3.784 3 4.75 3h3.5a.75.75 0 010 1.5h-3.5zM15 3.75a.75.75 0 01.75-.75h3.5c.966 0 1.75.784 1.75 1.75v3.5a.75.75 0 01-1.5 0v-3.5a.25.25 0 00-.25-.25h-3.5a.75.75 0 01-.75-.75zM3.75 15a.75.75 0 01.75.75v3.5c0 .138.112.25.25.25h3.5a.75.75 0 010 1.5h-3.5A1.75 1.75 0 013 19.25v-3.5a.75.75 0 01.75-.75zm16.5 0a.75.75 0 01.75.75v3.5A1.75 1.75 0 0119.25 21h-3.5a.75.75 0 010-1.5h3.5a.25.25 0 00.25-.25v-3.5a.75.75 0 01.75-.75z");
            } else {
                document.documentElement.requestFullscreen().catch((e) => {
                    console.log(e);
                });
                pathBtnFull.setAttribute('d', "M8.25 3a.75.75 0 01.75.75v3.5A1.75 1.75 0 017.25 9h-3.5a.75.75 0 010-1.5h3.5a.25.25 0 00.25-.25v-3.5A.75.75 0 018.25 3zm7.5 0a.75.75 0 01.75.75v3.5c0 .138.112.25.25.25h3.5a.75.75 0 010 1.5h-3.5A1.75 1.75 0 0115 7.25v-3.5a.75.75 0 01.75-.75zM3 15.75a.75.75 0 01.75-.75h3.5c.966 0 1.75.784 1.75 1.75v3.5a.75.75 0 01-1.5 0v-3.5a.25.25 0 00-.25-.25h-3.5a.75.75 0 01-.75-.75zm12 1c0-.966.784-1.75 1.75-1.75h3.5a.75.75 0 010 1.5h-3.5a.25.25 0 00-.25.25v3.5a.75.75 0 01-1.5 0v-3.5z");
            }
        });

    </script>
    <script type="text/babel">
        class CardRec extends React.Component {
            render() {
                return (
                    <a href={this.props.link} className="card-rec">
                        <div className="img-rec">
                            <img src={this.props.img} alt="" />
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
                return (
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
    <script type="text/babel">
        class KontenKomen extends React.Component {
            render() {
                return (
                    <div className="komentar1">
                        <div className="divFotoAva1">
                            <img src={this.props.ava} alt="" className="fotoAva1"/>
                        </div>
                        <div className="konten-komen">
                            <p className="tgl-komen">24/7/2001</p>
                            <p className="nama-komen">{this.props.username}</p>
                            <p className="isi-komen">{this.props.komen}</p>
                            <a href="#komentar" className="btn btn-balas shadow-none" onClick={()=> balasKomen(this.props.komen)}>Balas</a>
                            <div id="balasanKomen">
                                <div className="divFotoAva1">
                                    <img src={this.props.ava} alt="" className="fotoAva1" />
                                </div>
                                <div className="konten-komen">
                                    <p className="tgl-komen">24/7/2001</p>
                                    <p className="nama-komen">{this.props.username}</p>
                                    <p className="isi-komen">{this.props.komen}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                )
            }
        };

        KontenKomen.defaultProps = {
            ava: "{{ asset('img/ava-default.png') }}",
            username: 'username',
            komen: 'mantap bos pokoke koe'
        };

        class KumpulanComments extends React.Component {
                render() {
                    return (
                        <div>
                            <KontenKomen />
                            <KontenKomen />
                            <KontenKomen />
                            <KontenKomen />
                        </div>
                    )
                }
            };

            ReactDOM.render(<KumpulanComments />, document.getElementById('kumpulan-komment'));
    </script>
</body>

</html>