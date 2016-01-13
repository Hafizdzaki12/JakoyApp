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
  <title>Login Page | Materialize - Material Design Admin Template</title>

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
 <link rel="stylesheet" href="{{asset('jakoy-template/AdminTemplate/css/animate.css')}}" media="screen,projection">   
 
  
</head>

@if(Session::has('pesan'))
         <p align="center" class="yellow animated bounceInLeft">{{ Session::get('pesan') }}</p>
      @endif
<body class="cyan">
  <div id="login-page" class="row animated flip">
    <div class="col s12 z-depth-4 card-panel">
      
      {!! Form::open(['class' => 'login-form', 'route' => 'daftar', 'method' => 'post']) !!}
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Bergabung ke Grup Dakwah Visual !</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="username">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="username" type="password" name="password">
            <label for="username" class="center-align">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="nama" type="text" name="nama">
            <label for="nama" class="center-align">Nama</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="alamat" type="text" name="alamat">
            <label for="alamat">Alamat</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Daftar Sekarang</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Sudah Punya Akun? <a href="{{ route('masuk') }}">Login</a></p>
          </div>
        </div>
      </form>
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


