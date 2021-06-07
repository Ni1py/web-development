<!DOCTYPE html>
<html class="html" lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../web/css/style.css">
    <script src="../../web/js/carousel.js" defer></script>
  </head>
  <body class="body-format">
    <div class="menu">
      <div class="menu__link">
        <a class="menu__about-me menu__text" href="#">
          Обо мне
        </a>
      </div>
      <div class="menu__link">
        <a class="menu__hobby menu__text" href="#">
          Мое хобби
        </a>
      </div>
      <div class="menu__link">
        <a class="menu__video menu__text" href="#">
          Любимые фильмы
        </a>
      </div>
    </div>
    <div class="quote-photo">
      <div class="quote">
        <p class="quote__text_paragraph">
          Мы берем на себя много, потому что
          мало чего боимся
        </p>
        <p class="quote__text_author">&mdash; Том Демарко. Deadline</p>
      </div>
      <div class="photo">
        <img class="block-left__photo" src="images/photo_women.png" alt="Фотография девушки">
      </div>
    </div>
    <div class="block">
      <div class="biography">
        <h1 class="biography__title_top">Jane Doe</h1>
        <p class="biography__text">
          В 1930-е годы прошлого века физик Джордж Гамоу из
          университета штата Колорадо начал публиковать
          мини-сериал рассказов о неком мистере Томпкинсе,
          банковском клерке средних лет. Мистер Томпкинс, как
          явствовало из этих историй, интересовался современной
          наукой.
        </p>
        <h2 class="biography__title_bottom">Мое хобби</h2>
        <p class="biography__text">
          Он регулярно посещал вечерние лекции местного профессора
          и, разумеется, всегда засыпал на самом интересном месте.
          А когда просыпался, то обнаруживал себя в каком-нибудь
          параллельном мире, где один из основных законов физики
          действовал не так, как в его мире.
        </p>
        <div class="link__write-me">
          <a href="#" class="block-right__link">
            <span class="block-right__link-border">Напиши мне</span>
            <span class="block-right__link-arrow">&#8594;</span>
          </a>
        </div>
      </div>
      <div class="block-left">
        <div class="block-left__lovely-writers">
          <h3 class="block-left__title-list">Любимые писатели:</h3>
          <ul class="block-left__list">
            <li class="block-left__list-item">Айзек Азимов</li>
            <li class="block-left__list-item">Говард Лавкрафт</li>
            <li class="block-left__list-item">Дмитрий Глуховский</li>
            <li class="block-left__list-item">Чак Паланик</li>
          </ul>
        </div>
        <div class="block-left__lovely-films">
          <h3 class="block-left__title-list block-left__title-list_format">
            Любимые фильмы:
          </h3>
          <ol class="block-left__list">
            <li class="block-left__list-item">Шоу Трумэна</li>
            <li class="block-left__list-item">Малхолланд Драйв</li>
            <li class="block-left__list-item">Семь жизней</li>
            <li class="block-left__list-item">Гравитация</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="block-bottom">
      <h2 class="block-bottom__title">Любимые фильмы</h2>
    <div class="block-bottom__slider">
      <button class="block-bottom__left-button" id="left">
        <img  src="images/arrow_left.png" alt="Фотография левой стрелки">
      </button>
      <div class="block-bottom__slider-box">
        <div class="block-bottom__slider-cards">
          <div class="card">
            <img class="card-photo" src="images/movie_one.jpg" alt="Фото из фильма Побег из Шоушенка">
            <h3 class="card-title">Побег из Шоушенка</h3>
            <p class="card-text">
              Успешный банкир Энди Дюфрейн обвинен в убийстве собственной
              жены и ее любовника. Оказавшись в тюрьме под названием
              Шоушенк, он сталкивается с жестокостью и беззаконием,
              царящими по обе стороны решетки. Каждый, кто попадает
              в эти стены, становится их рабом до конца жизни. Но Энди,
              вооруженный живым умом и доброй душой, отказывается мириться
              с приговором судьбы и начинает разрабатывать невероятно
              дерзкий план своего освобождения.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/movie_two.jpg" alt="Фото из фильма Наркоз">
            <h3 class="card-title">Наркоз</h3>
            <p class="card-text">
              Клай Бересфорд вынужден лечь под нож. Однако в процессе
              операции на сердце он неожиданно приходит в себя. Находясь
              в парализованном состоянии, будучи не в силах пошевелить
              ни рукой, ни ногой, он, тем не менее, чувствует каждое
              касание скальпеля к своей плоти…
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/movie_three.jpg" alt="Фото из фильма Астрал">
            <h3 class="card-title">Астрал</h3>
            <p class="card-text">
              Джош и Рене переезжают со своими детьми в новый дом,
              но не успевают толком распаковать вещи, как начинаются
              странные события. Необъяснимо перемещаются предметы, в
              детской звучат странные звуки… Но в настоящий ужас
              приходят родители, когда их десятилетний сын Далтон
              впадает в кому. Все усилия врачей в больнице помочь
              мальчику безуспешны.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/movie_four.jpg" alt="Фото из фильма Гравитация">
            <h3 class="card-title">Гравитация</h3>
            <p class="card-text">
              Доктор Райан Стоун, блестящий специалист в области
              медицинского инжиниринга, отправляется в свою первую
              космическую миссию под командованием ветерана астронавтики
              Мэтта Ковальски, для которого этот полет — последний
              перед отставкой. Но во время, казалось бы, рутинной
              работы за бортом случается катастрофа. Шаттл уничтожен,
              а Стоун и Ковальски остаются совершенно одни; они
              находятся в связке друг с другом, и все, что они могут,
              — это двигаться по орбите в абсолютно черном пространстве
              без всякой связи с Землей и какой-либо надежды на спасение.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/hungry_games.jpg" alt="Фото из фильма Голодные игры">
            <h3 class="card-title">Голодные игры</h3>
            <p class="card-text">
              Каждый год Капитолий проводит жестокие игры, чтоб Дистрикты не
              забывали о том, кто в мире главный.Традиция стравливать друг с
              другом представителей районов страны со временем превратилась в
              грандиозное шоу. В этом году судьба представлять Двенадцатый
              Дистрикт выпадает Китнесс Эвердин, и это изменит мир.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/gifted.jpg" alt="Фото из фильма Одарённая">
            <h3 class="card-title">Одарённая</h3>
            <p class="card-text">
              Фрэнк Адлер живет в прибрежном городке во Флориде и воспитывает в
              одиночку свою необычайно одаренную племянницу Мэри. Но планы парня
              о спокойной школьной жизни для девочки рушатся, когда о
              математических способностях ребенка узнает грозная мать Фрэнка
              Эвелин.У бабушки свои представления о будущем внучки, и ради этого
              она готова даже разлучить Мэри с Фрэнком.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/it.jpg" alt="Фото из фильма Оно">
            <h3 class="card-title">Оно</h3>
            <p class="card-text">
              Когда в городке Дерри штата Мэн начинают пропадать дети, несколько
              ребят сталкиваются со своими величайшими страхами - не только с
              группой школьных хулиганов, но со злобным клоуном Пеннивайзом, чьи
              проявления жестокости и список жертв уходят в глубь веков.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/ater.jpg" alt="Фото из фильма После">
            <h3 class="card-title">После</h3>
            <p class="card-text">
              Случайная встреча перевернула их привычный мир. Она – прилежная
              студентка и образцовая дочь, а он – притягательный бунтарь с
              непростым прошлым. Живя в параллельных вселенных, они бы вряд ли
              даже взглянули друг на друга.Однако этому знакомству суждено
              разделить жизнь влюбленных на до и после.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/midnight_sun.jpg" alt="Фото из фильма Полночное солнце">
            <h3 class="card-title">Полночное солнце</h3>
            <p class="card-text">
              Ночами 17-летняя Кэти сочиняет красивые песни под гитару, а днем
              она вынуждена скрываться во мраке: её нежная кожа не выносит
              солнечного света. Но однажды в полночь Кэти знакомится с Чарли,
              веселым парнем с очаровательной улыбкой. Внезапная и страстная
              любовь яркой вспышкой озаряет жизнь больной девушки. И теперь ради
              возлюбленного она готова сгореть в лучах света безумного чувства.
            </p>
          </div>
          <div class="card">
            <img class="card-photo" src="images/hachi.jpg" alt="Фото из фильма Хатико">
            <h3 class="card-title">Хатико</h3>
            <p class="card-text">
              В основе сюжета - реальная история, случившаяся в Японии и
              потрясшая весь мир. Однажды, возвращаясь с работы, профессор
              колледжа нашел на вокзале симпатичного щенка породы акита-ину.
              Профессор и Хатико стали верными друзьями. Каждый день пес
              провожал и встречал Профессора на вокзале. И даже потеря хозяина
              не остановила пса в его надежде, что друг вернется.
            </p>
          </div>
        </div>
      </div>
      <button class="block-bottom__right-button" id="right">
        <img  src="images/arrow_right.png" alt="Фотография правой стрелки">
      </button>
    </div>
    <div class="block-bottom__button">
      <button class="block-bottom__button-all-films">Все фильмы</button>
    </div>
  </div>
    <div class="form-block">
      <form method="post" class="block-form__form">
      <?php if (isset($args['notification'])): ?>
        <p class="notification"><?php echo $args['notification']; ?></p>
      <?php endif; ?>
        <label class="block-form__form-title block-form__form-star">Ваше имя</label>
        <input class="block-form__form-item" type="text" name="first-name" maxlength="255"
          value="<?php echo $args['first-name'] ?? ''; ?>"/>
        <?php if (isset($args['first-name_error_msg'])): ?>
          <p class="first-name-error"><?php echo $args['first-name_error_msg']; ?></p>
        <?php endif; ?>
        <label class="block-form__form-title block-form__form-star">Ваш email</label>
        <input class="block-form__form-item" type="text" name="email" maxlength="255"
          value="<?php echo $args['email'] ?? ''; ?>" />
        <?php if (isset($args['email_error_msg'])): ?>
          <p class="email-error"><?php echo $args['email_error_msg']; ?></p>
        <?php endif; ?>
        <label class="block-form__form-title">Откуда вы?</label>
        <select class="block-form__form-country block-form__form-title-country" name="country">
          <option class="block-form__form-country-item" value="Russia">Россия</option>
          <option class="block-form__form-country-item" value="Chine"
          <?php echo isset($args['country']) && $args['country'] === 'Китай' ? 'selected' : '';?> >
          Китай
          </option>
        </select>
        <label class="block-form__form-title">Ваш пол</label>
        <div class="block-form__form-radio">
          <input class="block-form__radio" type="radio" id="genderman" name="gender" value="Мужской"
          <?php echo isset($args['gender']) && $args['gender'] === 'Мужской' ? 'checked' : ''; ?>/>
          <label class="block-form__form-radio-title" for="genderman">Мужской</label>
         <input class="block-form__radio" type="radio" id="genderwoman" name="gender" value="Женский" checked />
          <label class="block-form__form-radio-title" for="genderwoman">Женский</label>
       </div>
       <label class="block-form__form-title block-form__form-star">Ваше сообщение</label>
        <textarea class="block-form__form-you-message" name="text-messege" maxlength="255"><?php echo $args['text-messege'] ?? ''; ?></textarea>
        <?php if (isset($args['text-messege_error_msg'])): ?>
          <p class="text-messege-error"><?php echo $args['text-messege_error_msg']; ?></p>
        <?php endif; ?>
        <button class="block-form__button block-form__form-title-button">Отправить</button>
      </form>
    </div>
    <footer class="block-footer">
      <p class="block-footer__text">© 2006-2018 Поволжский государственный технологический
       университет, ФГБОУ ВО «ПГТУ»</p>
    </footer>
  </body>
</html>
