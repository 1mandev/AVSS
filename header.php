<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <meta name="robots" content="noindex" />
  <meta name="description" content="We offer a series of smart devices for your vehicles to protect against the theft. AVSS is the number #1 trusted brand all over the country for vehicle security system products.">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@AVSS.io">
  <meta name="twitter:title" content="AVSS.io - Track all your vehicles with AVSS">
  <meta name="twitter:description" content="We offer a series of smart devices for your vehicles to protect against the theft. AVSS is the number #1 trusted brand all over the country for vehicle security system products.">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>">
  
  <!-- Facebook Meta Tags -->
  <meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>" itemprop="thumbnailUrl">
  <meta property="og:title" content="AVSS.io - Track all your vehicles with AVSS">
  <meta property="og:url" content="http://avss.io/">
  <meta property="og:site_name" content="AVSS.io">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="We offer a series of smart devices for your vehicles to protect against the theft. AVSS is the number #1 trusted brand all over the country for vehicle security system products.">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>" type="image/x-icon">
  <?php if (is_front_page()) :  ?>
    <title><?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?></title>
  <?php else :  ?>
    <title><?php echo wp_title('') . ' - ' . get_bloginfo('name') ?></title>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="home">

  <div class="header">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light-custom navbar-custom box-shadow-lg">
      <a data-scroll class="navbar-brand" href="<?php echo site_url('/') ?>">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>" width="32" class="d-inline-block align-top" alt="" />
        avss.io 
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="bg-primary-custom line-one"></div>
        <div class="bg-primary-custom line-two"></div>
        <div class="bg-primary-custom line-three"></div>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-4 ml-lg-0 my-3 my-lg-0 mr-auto ml-xl-5">
          <li class="nav-item active">
            <a data-scroll class="nav-link nav-link-custom" 
            href="<?php echo site_url('/#devices') ?>">products</a>
          </li>
          <li class="nav-item">
            <a data-scroll class="nav-link nav-link-custom" href="<?php echo site_url('/#features') ?>">features</a>
          </li>

          <li class="nav-item">
            <a data-scroll class="nav-link nav-link-custom" href="<?php echo site_url('/#appinfo') ?>">download app</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="<?php echo site_url('/blog') ?>">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="<?php echo site_url('/dealers') ?>">selling points</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="<?php echo site_url('/about') ?>">about us</a>
          </li>
        </ul>
        <!-- end of nav-link -->
        
        <div class="nav-right flex-column flex-lg-row align-items-start align-items-lg-center ali ml-4 ml-lg-0">
          <div class="d-flex align-items-center nav-number mr-3 mr-xl-4">
            <i class="icon ion-md-call mr-xl-2 phone"></i>
            <a class="number" href="phone:01789025020">01789-025-020</a>
          </div>
          <div class="nav-button mt-2 mt-lg-0">
            <a href="<?php echo site_url('/contact'); ?>" class="btn-custom btn-secondary-custom btn-normal-custom box-shadow-btn">
              Contact now <i class="btn-ic icon ion-md-arrow-forward"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>