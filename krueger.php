<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="stylesheet" href="libs/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/js.js"></script>
    <script type="text/javascript" src="http://vk.com/js/api/openapi.js?122"></script>
    <script type="text/javascript">
        VK.init({apiId: 5140828, onlyWidgets: true});
    </script>
    <title>Крюгер</title>
</head>
<body>
<header class="krueger-header">
    <div class="container">
    <? include "header_board.php";?>
  <div class="header-body">
            <div class="row">
                <div class="col-md-8">

                    <img class="krueg-img" src="img/header/krueger/krueg-text.png" alt="#">
                    <p class="text-about-krueger">
                        Жителей нашего города преследует один и тот же кошмар: во снах за ними<br class="none">
                        крадется жуткий, обезображенный убийца — Фредди Крюгер.<br class="none">
                        Они могут защитить друг друга наяву, во сне же — остаются один на один<br class="none">
                        с ожившим кошмаром, и шансы спастись стремительно приближаются к нулю…<br class="none">
                        Единственный способ защититься - побороть его во сне<br class="none">
                        и проснуться за 60 минут...
                    </p>

                    <a href="#reviews" class="button1">
                        <p>ОТЗЫВЫ О КОМНАТЕ</p>
                    </a>

                    <a href="#enroll" class="button2">
                        <p>ЗАПИСАТЬСЯ НА ИГРУ</p>
                    </a>

                </div>
                <div class="col-md-4">

                    <p class="top-footer-box">
                        <img class="star-footer" src="img/header/lab/star.png" alt="#">
                        <span class="number-footer">9.1</span>
                    </p>
                    <p class="top-footer">Рейтинг на основе<br>3 оценок</p>
                    <p class="time">00:48</p>
                    <p class="time-text">Среднее время<br>прохождения</p>

                    <a class="appreciate" href="#">
                        <p>
                            ОЦЕНИТЬ КОМНАТУ
                        </p>
                    </a>

                </div>
            </div>
        </div>

    </div>
</header>
<? include "Gallery.php";?>
<? include "Reviews_with_button.php";?>
<? include "table.php";?>
 <!-------------------MODAL---------------- -->

    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="container popUp">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right close" data-dismiss="modal">

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 content_modal">
                <p class="title_popUp">
                    <span>Бронирование</span>
                </p>
                <form action="" role="form" class="form_form">
                    <div class="col-md-6 col-sm-12 form_left">
                        <div class="form-group">
                            <input type="text" class="form-control" id="day" placeholder="day" name="day">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="time" placeholder="time" name="time">
                        </div>

                        <div>
                            <div class="col-md-8 col-sm-6 col-xs-8 checkbox_form">
                                <label for="checkbox" id="label_checkbox">
                                    У меня есть скидка
                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-4 checkbox_iphone">
                                <div>
                                    <input type="checkbox" class="checkbox" id="checkbox" />
                                    <label for="checkbox"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 form_right">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="tel" placeholder="Контактный телефон" name="tel">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Ваш E-mail" name="email">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-default form_button_up" id="modal_enroll">
                            <a href="thanks_krueger.html">Забронировать комнату </a>
                        </button>
                    </div>
                </form>
                <div class="confidentiality text-center">
                    <p>
                        Введенные данные строго конфиденциальны.
                        <br>
                        <a href="https://yandex.ru/legal/confidential/" target="blank"> Политика конфиденциальности </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    </div>
<? include "write_letter.php";?>

<footer class="krueger-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <img class="foot-img-lab" src="img/header/lab/logo-lab.png" alt="#">

                <p class="footer-text">
                    Очнулись с друзьями в помещении... Заперто!<br>
                    Огляделись вокруг - интструменты, халаты, хирургические инструмиенты.<br>
                    Что же это? Операционная, логово маньяка или подпольная больница?<br>
                    Таймер начал отсчёт, и лучше бы успеть...<br>
                </p>

                <a href="laboratory.php">
                    <p>
                        ПОДРОБНЕЕ
                    </p>
                </a>

            </div>
            <div class="col-md-4">

                <div class="top-footer-box">
                    <img class="star-footer" src="img/header/lab/star.png" alt="#">
                    <p class="number-footer">9.1</p>
                    <p class="top-footer">Рейтинг на основе<br>3 оценок</p>
                </div>

            </div>
        </div>
    </div>
</footer>
</body>
</html>