<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posh Travel</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>

<body>
  <!-- #მიხეილ ბოჭორიძე -->

  <header class="header-top">
    <div class="container-xl">
      <div class="d-flex justify-content-between align-items-center">
        <div class="header-left">
          <div class="logo">
            <a href="index.html">
              <img src='<?= get_template_directory_uri() ?>/assets/images/Asset 33.png' alt="main logo">
            </a>
          </div>

          <?php
          wp_nav_menu(array(
            'menu'              => "",
            'menu_class'        => "mb-0",
            'menu_id'           => "",
            'container'         => "",
            'container_class'   => "",
            'container_id'      => "",
            'theme_location'    => "top_menu",
          ));
          ?>

        </div>

        <div class="header-right">

          <div class="mag">
            <!-- SEARCHBAR da SUBMIT gilaki -->
            <form role="search" method="get" id="searchform" class="searchform d-inline-flex flex-row align-items-center" action="<?php echo get_site_url(); ?>">
                <input type="text" name="s" id="s" class="me-2">
                <input type="image" id="searchsubmit"  src='<?= get_template_directory_uri() ?>/assets/images/magnifing glass.png' alt="search logo">
            </form>
          </div>

          <div class="con">
            <div class="asa">
              <p>მ.ასათიანის ქუჩა #12</p>
              <p>თბილისი, საქართველო</p>
              <p>0117</p>
            </div>
          </div>

          <div class="menu"><img src="<?= get_template_directory_uri() ?>/assets/images/menu.png" alt="menu"></div>

        </div>
      </div>
    </div>
  </header>