<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
 <!-- CORE CSS--> 
 <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/materialize.css')}}" media="screen,projection">   
 <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/style.css')}}" media="screen,projection">   
 <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/page-center.css')}}" media="screen,projection">   
 <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/animate.css')}}">   
 
  
</head>

<body class="cyan">
  <!-- <p class="animated infinite swing">Created By Hafizdzaki</p> -->
  @if(Session::has('pesan'))
    <p align="center" class="yellow animated bounce">{{ Session::get('pesan') }}</p>
  @endif
  <div id="login-page" class="row animated slideInLeft">
    <div class="col s12 z-depth-4 card-panel">
        {!! Form::open(['class' => 'login-form']) !!}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <h3 class="center login-form-text"><b>App</b>Dakwah</h3>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <p class="margin medium-small"><a href="{{ route('daftar') }}">Daftar Sekarang!</a></p>
          </div>    
        </div>
      {!! Form::close() !!}
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->

  <script src="{{asset('jakoy-template/AdminTemplate/js/jquery-1.11.2.min.js')}}"></script>
  <script src="{{asset('jakoy-template/AdminTemplate/js/materialize.min.js')}}"></script>
  <script src="{{asset('jakoy-template/AdminTemplate/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('jakoy-template/AdminTemplate/js/prism.js')}}"></script>
  <script src="{{asset('jakoy-template/AdminTemplate/js/plugin.js')}}"></script>

</body>

</html>