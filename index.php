<?php
get_header();
?>
<main class="main" id="main">
  <div class="header__main" id="home">
    <div class="header__img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/heading.png" class="shadow" alt="">
      <img class="header__lines" src="<?php echo get_template_directory_uri(); ?>/img/img_lines.svg" alt="">
    </div>
    <div class="header__info">
      <h1 class="header__info__heading">
        Подними <br> свой подкаст на <br><img class="underline"
                                              src="<?php echo get_template_directory_uri(); ?>/img/underline.svg"
                                              alt=""><span class="underlined">новый</span> <span class="heading__fat">уровень</span>
      </h1>
      <div class="header__listenOn">
        <span class="text__light">Слушай на</span>
        <ul class="listenOn__list">
          <li class="listenOn__list__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_1.svg"
                                                alt=""></li>
          <li class="listenOn__list__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_2.svg"
                                                alt=""></li>
          <li class="listenOn__list__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_3.svg"
                                                alt=""></li>
          <li class="listenOn__list__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_4.svg"
                                                alt=""></li>
          <li class="listenOn__list__item"><img src="<?php echo get_template_directory_uri(); ?>/img/music_5.svg"
                                                alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="episodes" id="episodes">
    <div class="episodes__info">
      <h2 class="heading">Последние выпуски</h2>
      <a href="#" class="episodes__viewAll button">посмотреть все</a>
    </div>
    <div class="episodes__block">
      <div class="episode shadow">
        <div class="episode__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/episode_1.png" alt="">
        </div>
        <div class="episode__info">
          <div class="episode__tag">
            Оборудование
          </div>
          <div class="episode__number active">
            выпуск 3
          </div>
          <div class="episode__heading heading">
            Нужны ли вам подвесные аудиоустройства?
          </div>
          <p class="text">
            Действительно ли оборудование того стоит, когда дело доходит до подкастинга? Ответ зависит от обстоятельств.
            Вот наши причины, по которым вы, возможно, захотите что-то приобрести.
          </p>
          <a class="button">
            узнать больше
          </a>
        </div>
      </div>
      <div class="episode shadow">
        <div class="episode__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/episode_2.png" alt="">
        </div>
        <div class="episode__info">
          <div class="episode__tag">
            Советы & лайфхаки
          </div>
          <div class="episode__number active">
            выпуск 2
          </div>
          <div class="episode__heading heading">
            Лайфхаки, которые выведут вас на новый уровень
          </div>
          <p class="episode__text text">
            Перестаньте использовать настройки вашего микрофона по умолчанию. Эти небольшие изменения помогут вам
            перейти
            от хорошего звучания к великолепному. </p>
          <a class="button">
            узнать больше
          </a>
        </div>
      </div>
      <div class="episode shadow">
        <div class="episode__img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/episode_3.png" alt="">
        </div>
        <div class="episode__info">
          <div class="episode__tag">
            Оборудование
          </div>
          <div class="episode__number active">
            выпуск 1
          </div>
          <div class="episode__heading heading">
            Лучший микрофон до 10000 рублей
          </div>
          <p class="text">
            С таким количеством микрофонов на рынке, как вы можете определить, какой из них самый лучший? Взгляните на
            наши лучшие варианты. </p>
          <a class="button">
            узнать больше
          </a>
        </div>
      </div>
    </div>

  </div>
  <div class="contact" id="about">
    <div class="contact__info">
      <div class="contact__button">
        <a class="contact__button__icon  shadow">
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="">
        </a>
        <div class="contact__button__text active">
          встреть своего ментора;)
        </div>
      </div>
      <div class="contact__heading heading">
        Jacob Paulaner
      </div>
      <p class="text">
        Джейкоб имеет образование в области аудиотехники и с первых дней занимается подкастингом.
      </p>
      <p class="text">
        Он здесь для того, чтобы помочь вам повысить уровень вашего ведения подкаста, поделившись всем, чему он научился
        на этом пути.
      </p>
    </div>
    <div class="contact__img">
      <img class="shadow" src="<?php echo get_template_directory_uri(); ?>/img/contact.png" alt="">
    </div>
  </div>
  <div class="subscribe shadow">
    <div class="subscribe__left">
      <div class="active">Новости и события</div>
      <div class="subscribe__heading heading__fat">Подпишись<br>на обновления</div>
    </div>
    <div class="subscribe__right">
      <input class="subscribe__button__field" placeholder="login" type="text">
      <input class="subscribe__button__field" placeholder="email" type="text">
      <input type="submit" class="subscribe__button__submit" value="подписаться">
    </div>
    <div class="subscribe__lines">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img_lines.svg" alt="">
    </div>
  </div>
  <div class="comments">
    <div class="comment shadow">
      <div class="comment__stars">
        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="">
      </div>
      <div class="comment__text heading">Я не могу не рекомендовать этот подкаст</div>
      <div class="comment__author text">Бетти Лейси</div>
    </div>
    <div class="comment shadow">
      <div class="comment__stars">
        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="">
      </div>
      <div class="comment__text heading">Джейкоб - лучший в своем деле</div>
      <div class="comment__author text">Адам Драйвер</div>
    </div>
    <div class="comment shadow">
      <div class="comment__stars">
        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="">
      </div>
      <div class="comment__text heading">Обширные знания в области аудиозаписи</div>
      <div class="comment__author text">Маркус Браун</div>
    </div>
    <div class="comment shadow">
      <div class="comment__stars">
        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="">
      </div>
      <div class="comment__text heading">Каждый эпизод - настоящая находка!</div>
      <div class="comment__author text">Джессика Ноулз</div>
    </div>
    <div class="comment shadow">
      <div class="comment__stars">
        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="">
      </div>
      <div class="comment__text heading">Эй, эй, дай мне сделать несколько заметок!</div>
      <div class="comment__author text">Скотт Адамс</div>
    </div>
    <div class="comment shadow">
      <div class="comment__stars">
        <img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/star.svg" alt="">
      </div>
      <div class="comment__text heading">Я стал в 100 раз лучше с тех пор, как начал слушать</div>
      <div class="comment__author text">Стивен Бласт</div>
    </div>
  </div>
</main>
<?php
get_footer();
?>
