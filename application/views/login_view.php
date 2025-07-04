<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="shortcut icon" href="" />
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/dist/css/responsivelogin.css');?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    body {
        overflow-y: hidden; 
        margin: 0; 
        padding: 0;
      }
      #background-video {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
      }
      .login-box {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 200%;
        max-width: 500px;
      }
      .login-box-body {
        background-color: rgba(255, 255, 255, 0.2);
        border: 2px solid #226bbf;
      }
      .btn-center {
        display: flex;
        justify-content: center;
      }
  </style>
  </head>
<body class="hold-transition login-page" style="overflow-y: hidden;">
    <video autoplay muted loop style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
        <source src="<?= base_url('assets_style/video/Background.mp4'); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="login-box">
        <br/>
        <div class="login-logo">
            <a href="index.php" style="color: yellow;">Sistem Informasi <br/><b>Perpustakaan Cyber</b></a>
        </div>
        <div id="tampilalert"></div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border:2px solid #226bbf;">
            <p class="login-box-msg" style="font-size:16px;"></p>
            <form action="<?= base_url('login/auth');?>" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" id="user" name="user" required="required" autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" required="required" autocomplete="off">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4">
                        <button type="submit" id="loding" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        <div id="loadingcuy"></div>
                    </div>
                </div>
            </form>
        </div>
        <br/>
    </div>
    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets_style/assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets_style/assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets_style/assets/plugins/iCheck/icheck.min.js');?>"></script>
</body>

