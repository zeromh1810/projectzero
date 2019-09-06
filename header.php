<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <title>Home | Project Zero</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900|Josefin+Sans:600i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/cbcb805a57.js"></script>

  <?php get_template_part('_includes/iOS', 'icons') ?>
  <?php wp_head() ?>
</head>

<body>

  <nav class="navbar navbar-default navbar-expand-lg nav-menu">
    <div class="container-fluid">
      <a href="<?php bloginfo('url') ?>" class="navbar-brand text-uppercase">Project Zero</a>
      <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
        <div class="line1 ham"></div>
        <div class="line2 ham"></div>
        <div class="line3 ham"></div>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
        <?php  /* menu */
        wp_nav_menu(
          array(
            'menu'              => 'primary-menu',
            'theme_location'    => 'primary-menu',
            'depth'             => 5,
            'container'         => 'ul',
            'menu-id'            => false,
            'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse ',
            'menu_class'        => 'navbar-nav  ml-auto',
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
          )
        );
        ?>
      </div>
    </div>
  </nav>