<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Beranda AppDakwah</title>

    <!-- CSS  -->

    <link rel="stylesheet" href="{{asset('jakoy-template/MaterialPublic/min/custom-min.css')}}">   
    <link rel="stylesheet" href="{{asset('jakoy-template/MaterialPublic/min/plugin-min.css')}}">   
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo"><b>App</b>Dakwah</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#dakwah">Dakwah</a></li>
                    <li><a href="{{ route('keluar') }}">Logout</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#dakwah">Dakwah</a></li>
                    <li><a href="{{ route('keluar') }}" target="_blank">Logout</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>Dakwah Adalah Kewajiban</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Aku</b>
                <b>Kamu</b>
                <b>Kalian</b>
                <b>Kita</b>
            </span>
        </h1>
    </div>
</div>

<!--Work-->
<div class="section scrollspy" id="dakwah">
    <div class="container">
        <h2 class="header text_b">Dakwah </h2>
        <div class="row">
            @foreach($data as $temp)
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        {!! Html::image('upload/' . $temp->gambar, '', ['class' => 'activator']) !!}
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $temp->nama }} <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">{{ $temp->kategori->nama }}</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{ $temp->nama }} <i class="mdi-navigation-close right"></i></span>
                        <p>{{ $temp->deskripsi }}</p>
                    </div>
                </div>
            </div> 
            @endforeach

        </div>
        <div class="row text-center">
           
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax1.png"></div>
</div>


<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">

    <div class="footer-copyright default_color">
        <div class="container">
            Made by <a class="white-text" href="http://joashpereira.com">Joash Pereira</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="{{asset('jakoy-template/MaterialPublic/min/plugin-min.js')}}"></script>
    <script src="{{asset('jakoy-template/MaterialPublic/min/custom-min.js')}}"></script>


    </body>
</html>
