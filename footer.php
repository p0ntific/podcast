<footer class="footer" id="contacts">
  <div class="footer__left">
    <h2 class="footer__left__heading heading__fat">Castaway</h2>
    <ul class="footer__left__list">
      <li class="footer__left__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/link_1.svg" alt="">
      </li>
      <li class="footer__left__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/link_2.svg" alt="">
      </li>
      <li class="footer__left__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/link_3.svg" alt="">
      </li>
    </ul>
  </div>
  <div class="footer__middle">
      <ul class="footer__nav__list">
        <li class="footer__nav__item text">Главная</li>
        <li class="footer__nav__item text">О нас</li>
        <li class="footer__nav__item text">Выпуски</li>
        <li class="footer__nav__item text">Контакты</li>
      </ul>
      <ul class="footer__nav__list">
        <li class="footer__nav__item text">Руководство</li>
        <li class="footer__nav__item text">Советы</li>
        <li class="footer__nav__item text">Журнал изменений</li>
        <li class="footer__nav__item text">Благодарности</li>
        <li class="footer__nav__item text">Дизайн сделан WebFlow</li>
        <li class="footer__nav__item text">Лицензии</li>
      </ul>
  </div>
  <div class="footer__right">
    <ul class="footer__right__list">
      <li class="footer__right__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_1.svg"
                                          alt=""></li>
      <li class="footer__right__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_2.svg"
                                          alt=""></li>
      <li class="footer__right__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_3.svg"
                                          alt=""></li>
      <li class="footer__right__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_4.svg"
                                          alt=""></li>
      <li class="footer__right__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_5.svg"
                                          alt=""></li>
    </ul>
  </div>
</footer>

</div>

<script>
  let burger = document.getElementById('burger__btn');
  let menu = document.getElementById('menu');
  let main = document.getElementById('main');
  let footer = document.getElementById('footer');
  burger.onclick = ()=>{
    menu.classList.toggle('nav__list__active');
  };
  main.onclick = ()=>{
    menu.classList.remove('nav__list__active');
  }
  footer.onclick = ()=>{
    menu.classList.remove('nav__list__active');
  }
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<?php wp_footer(); ?>
</body>

</html>
