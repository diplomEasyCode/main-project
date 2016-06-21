<!-- Page  Horror Laboratory ("Главная и лаборатория(эта одна и та же страница Лаборатория, только отличается картинка в хедере")) -->

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
    <title>KQ Квест-комната</title>
</head>
<body>
<header class="laboratory-header">
        <div class="container">

        <? include "header_board.php";?>

            <div class="header-body">
                <div class="row">

                    <div class="col-xs-12 col-sm-10 col-md-10">
                        <img src="img/header/lab/logo-lab.png" alt="#">
                        <p class="main-text">Жителей нашего города преследует один и тот же кошмар: во снах за ними<br class="none">
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

                    <div class="col-xs-0 col-sm-2 col-md-2">
                        <p class="about-game">
                            <img src="img/header/lab/persons.png" alt="#"><br>
                            2-4 допустимое<br> кол-во игроков<br>
                            <br>
                            <img src="img/header/lab/clock.png" alt="#"><br>
                            60 минут дается<br>
                            на игру
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </header>
<? include "Gallery.php";?>
<? include "Reviews_with_button.php";?>
<? include "table.php";?>
<? include "write_letter.php";?>
 <footer class="laboratory-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <img class="foot-img-lab" src="img/header/lab/footer-logo.png" alt="#">

                    <p class="footer-text">
                        Очнулись с друзьями в помещении... Заперто!<br>
                        Огляделись вокруг - интструменты, халаты, хирургические инструмиенты.<br>
                        Что же это? Операционная, логово маньяка или подпольная больница?<br>
                        Таймер начал отсчёт, и лучше бы успеть...<br>
                    </p>

                    <a href="krueger.php">
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