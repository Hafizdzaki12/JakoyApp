<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Admin Aplikasi Dakwah</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS--> 
    <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/materialize.css')}}" media="screen,projection">   
    <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/style.css')}}" media="screen,projection">   
    <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/animate.css')}}" media="screen,projection">   

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   


 


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="AppDakwah"></a> <span class="logo-text"></span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                       <!--  <li>    
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>                              
                        </li> -->
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                       <li><a href="{{ route('keluar') }}"><i class="mdi-hardware-keyboard-tab"></i></a>
                       </li>
                        <!-- Dropdown Trigger -->                       
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="{{ route('keluar') }}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php $user=\Auth::user()->username; echo $user; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
    
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Kelola Konten</a>
                                <div class="collapsible-body">
                                    <ul>
                                       <li><a href="{{ route('konten.index')}}">Lihat Konten</a>
                                       </li>  
                                       <li><a href="{{ route('konten.create')}}">Tambah Konten</a>
                                       </li>                           
                                    </ul>
                                </div>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    @if(Auth::user()->level = 1)
                                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Kelola User</a>
                                        <div class="collapsible-body">
                                            <ul>
                                               <li><a href="{{ route('user.index')}}">Lihat User</a>
                                               </li>
                                               <li><a href="{{ route('user.create')}}">Tambah User</a>
                                               </li>                                               
                                            </ul>
                                        </div>
                                    </li>
                                    @endif
                                    <li class="no-padding">
                                        <ul class="collapsible collapsible-accordion">
                                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Kelola Kategori</a>
                                                <div class="collapsible-body">
                                                    <ul>
                                                        <li><a href="{{ route('kategori.index')}}">Lihat Kategori</a>
                                                        </li> 
                                                        <li><a href="{{ route('kategori.create')}}">Tambah Kategori</a>
                                                        </li>                                                 
                                                    </ul>
                                                </div>
                                            </li>
                        </ul>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>                   
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text"></p></li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">                            
                                    <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

                        <section id="content">


               
                @section("konten")
                @show()

            </section>

            <!-- //////////////////////////////////////////////////////////////////////////// -->


        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
  

   
    <script src="{{asset('jakoy-template/AdminTemplate/js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('jakoy-template/AdminTemplate/js/materialize.min.js')}}"></script>
    <script src="{{asset('jakoy-template/AdminTemplate/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('jakoy-template/AdminTemplate/js/plugins.js')}}"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hai.</span>', 1500);
        }, 3000);
        setTimeout(function() {
            Materialize.toast('<span>Jangan Lupa Ibadahnya</span>', 3000);
        }, 5500);
        setTimeout(function() {
            Materialize.toast('<span>Karena Hidup Hanya Sekali Taatlah Berkali Kali</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 18000);
    });
    
    </script>
</body>

</html>