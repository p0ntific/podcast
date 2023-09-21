<!doctype html>
<html class="no-js" lang="">
<head>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <?php wp_head(); ?>
</head>

<body>
<div class="container">
  <div class="nav__wrapper">
    <nav class="nav">
      <button id="burger__btn" class="burger__btn">
        <div></div>
        <div></div>
        <div></div>
      </button>
      <h2 class="nav__logo heading__fat">
        Castaway
      </h2>
      <?php wp_nav_menu( [
        'theme_location'  => '',
        'menu'            => '',
        'container'       => null,
        'menu_class'      => 'nav__list',
        'menu_id'         => 'nav__list',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      ] ); ?>
      <!--<ul class="nav__list" id="menu">
        <li class="nav__list__item active"><a href="#">Домой</a></li>
        <li class="nav__list__item"><a href="#">Выпуски</a></li>
        <li class="nav__list__item"><a href="#">О нас</a></li>
        <li class="nav__list__item"><a href="#">Контакты</a></li>
      </ul>-->

    </nav>
  </div>
