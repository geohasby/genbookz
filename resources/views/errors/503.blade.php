<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
        display: block;
    }
    body {
        line-height: 1;
    }
    ol, ul {
        list-style: none;
    }
    blockquote, q {
        quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    /* ? STYLE */

    body {
        font-family: Bahnschrift, Helvetica, sans-serif;
        font-weight: normal;
    }
    .bg-default {
        width: 100%;
        margin-top: -3%;
    }
    .bg-hp {
        width: 100%;
        display: none;
    }
    .link1 {
        font-size: 12px;
    }
    .link1:hover {
        text-decoration: none;
    }
    .p1 {
        margin-top: 9px;
        font-weight: 900;
        font-size: 70px;
        color: #4590d0;
    }
    .p2, .p3 {
        margin-top: 8px;
        font-size: 25px;
        color: #4590d0;
    }
    .icon-sosmed {
        margin-top: 15px;
    }
    .icon-sosmed ul li {
        display: inline-block;
        margin-right: 8px;
    }


    @media (max-width: 768px) {
        .bg-default {
            display: none;
        }
        .bg-hp {
            display: unset;
        }
        .p1 {
        margin-top: 20px;
        font-weight: 900;
        font-size: 60px;
        color: #4590d0;
        }
        .p2, .p3 {
            margin-top: 8px;
            font-size: 20px;
            color: #4590d0;
        }
    }
    </style>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icongenbookz.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <title>Genbookz</title>
</head>

<body>
    <img src="{{ asset('img/cs.png') }}" class="bg-default" alt="">
    <img src="{{ asset('img/cs-hp.png') }}" class="bg-hp" alt="">
    <div class="link-l text-center">
        <a class="link1" href="https://www.freepik.com/free-photos-vectors/business">Business vector created by freepik - www.freepik.com</a>
    </div>
    <p class="text-center p1">UPS, MAAF!!</p>
    <p class="text-center p2">Situs ini sedang dalam pengerjaan.</p>
    <p class="text-center p3">Jadi bersabar dan mohon doanya.</p>
    <div class="icon-sosmed text-center">
        <ul>
            <li><a href="https://www.facebook.com/genbookz.sirius.5"><img class="icon-fb" src="{{ asset('img/ribbonfb.png') }}" alt="" width="35"></a></li>
            <li><a href="https://www.instagram.com/genbookz/"><img src="{{ asset('img/ribbonig.png') }}" alt="" width="35"></a></li>
            <li><a href="https://twitter.com/Genbookz2020"><img src="{{ asset('img/ribbontwitter.png') }}" alt="" width="35"></a></li>
        </ul>
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
</body>

</html>