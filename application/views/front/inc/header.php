<!DOCTYPE html>
<html languge="english">

  <head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width," intitial-scale="1" maximum-scale="1">
    
    <meta name="Danish" content="">

    <title>Lendexsys</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="<?php echo site_url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo site_url('vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/proxima/fonts.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">
    <link href="<?php echo site_url('assets/icheck/skins/line/blue.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">
    <!-- Plugin CSS -->
    <link href="<?php echo site_url('vendor/magnific-popup/magnific-popup.css');?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('assets/css/creative.min.css');?>" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
 
      <script src="<?php echo site_url('assets/icheck/icheck.js');?>"></script>
   
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <row>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" onclick="this.style.overflow='visible';">
      <div class="container site-logo">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('landing');?>"><img src="<?php echo site_url('assets/images/Lendexsys-3-F-trans-F-dustin_03.png');?>"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('landing');?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">LearnMore</a>
            </li>
           
            <li class="nav-item">
              <a class="btnsmallnav nav-link js-scroll-trigger" href="#bottom"><i class="fa fa-search"></i></a>
            </li>
            
            <?php 
            if(isset($this->session->userdata['user_name']) && ($this->session->userdata['user_name']!='')){
              ?>
              
             <li class="dropdown open nav-item">
              <a href="#" class="dropdown-toggle btn btn-primary btn-xl js-scroll-trigger btntopnav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Dashboard <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('userfront/user_profile');?>">Your Profile</a></li>
                <li><a href="<?php echo site_url('userfront/investment');?>">Loan Setting</a></li>   
                <li><a href="#">Payment Setting</a></li>  
                <li><a href="#">Bank Setting</a></li>
           
              </ul>
            </li>   
              
        
              
            <li class="nav-item">
            <a class="btn btn-primary btn-xl js-scroll-trigger btntopnav" href="<?php echo site_url('logout');?>">LOGOUT</a>
            </li>
              <?php }else {?>
               <li class="dropdown open nav-item">
              <a href="#" class="dropdown-toggle btn btn-primary btn-xl js-scroll-trigger btntopnav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Create Account <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('register');?>">Borrower</a></li>
                <li><a href="<?php echo site_url('register/lender');?>">Lender</a></li>
              
           
              </ul>
            </li>   
            
            
            <li class="nav-item">
              <a class="btn btn-primary btn-xl js-scroll-trigger btntopnav" href="<?php echo site_url('signin');?>">LOGIN</a>
            </li>


             <?php } ?>
            

          </ul>
        </div>
      </div>
    </nav>
    </row>