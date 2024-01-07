<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body class="body-scroll">
    <div class="wrapper clearfix" id="wrapper">
      <header class="header header-1 header-transparent header-fixed" id="navbar-spy">
        <nav class="navbar navbar-hidden navbar-sticky navbar-expand-lg" id="primary-menu"> 
          <div class="container"> <a class="logo navbar-brand" href="index.html"><img class="logo logo-dark" src="<?php echo get_theme_file_uri('/assets/images/logo/logo-dark.png')?>" alt="Lenoto Logo"/><img class="logo logo-light" src="<?php echo get_theme_file_uri('/assets/images/logo/logo-light.png')?>" alt="Lenoto Logo"/></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo" href="#hero">home</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#feature2">feature</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#banner">author</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#reviews">reviews</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#pricing">pricing</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#cta">download</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>