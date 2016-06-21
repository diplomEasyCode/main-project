﻿<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/fonts.css">
	<script type="text/javascript" src="http://vk.com/js/api/openapi.js?122"></script>
	<script src="js/js.js"></script>
	<script type="text/javascript" src="http://vk.com/js/api/openapi.js?122"></script>
	<title>KQ Квест-комната</title>
</head>
<body>

<header class="index-header">

	<div class="container">
		<? include "header_board.php";?>

		<div class="header-body">
			<h1>
				Квест-комнаты в Харькове<br>
				— это <span class="new-age">развлечение нового поколения</span>
			</h1>
			<h2>
				Разгадывайте головоломки, воспользуйтесь всеми доступными предметами,<br class="none">
				решите все задачи и <b>откройте дверь за 60 минут</b>
			</h2>

			<a href="#pick_room" class="choice">
				<p>Выбрать квест-комнату</p>
			</a>

			<a href="#rules" class="how">
				<p>Как играть?</p>
			</a>
		</div>

	</div>
</header>

<section class="pick_room" id="pick_room">
	<div class="container">
		<div class="col-md-12 room_title">
			<p>
				Наши квест-комнаты
			</p>
		</div>
		<div class="rowRooms">
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 left_laboratory">
				<a href="laboratory.php">
					<div class="laboratory"></div>
				</a>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 right_kruger">
				<a href="krueger.php">
					<div class="kruger"></div>
				</a>
			</div>
		</div>
	</div>
</section>

<? include "reviews.php";?>

<section class="rules" id="rules">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 title_rules">
			<p>
				Как играть?
			</p>
		</div>
		<div class="rowPlayers">
			<div class="col-md-9 col-sm-9 col-xs-9 left">
				<p>
					Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда
					модификации, например, юмористические вставки или слова, которые даже отдалённо
					не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы
					наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца.
				</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 right">
				<img src="img/rules/players.png" alt="" class="img-responsive">
				<p>
					Допустимое количество
					игроков, от 2 до 4 человек
				</p>
			</div>
		</div>
		<div class="rowTime">
			<div class="col-md-9 col-sm-9 col-xs-9 left">
				<p>
					Также все другие известные генераторы Lorem Ipsum используют один и тот же текст,
					который они просто повторяют, пока не достигнут нужный объём.
				</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 right">
				<img src="img/rules/time.png" class="img-responsive" alt="">
				<p>
					60 минут дается
					на игру
				</p>
			</div>
		</div>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<div class="col-xs-10 FAQ">Что делать, если нас больше 4 человек?</div>
						<div class="col-xs-2 sprite"><div class="sprite_accordion"></div></div>
					</a>

				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они
						просто повторяют, пока не достигнут нужный объём.
						<a href="#pick_room">Выбрать квест комнату</a>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<div class="col-xs-10 FAQ">Что делать, если нас больше 4 человек?</div>
							<div class="col-xs-2 sprite"><div class="sprite_accordion"></div></div>
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они
						просто повторяют, пока не достигнут нужный объём.
						<a href="#pick_room">Выбрать квест комнату</a>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<div class="col-xs-10 FAQ">Что делать, если нас больше 4 человек?</div>
							<div class="col-xs-2 sprite"><div class="sprite_accordion"></div></div>
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они
						просто повторяют, пока не достигнут нужный объём.
						<a href="#pick_room">Выбрать квест комнату</a>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<div class="col-xs-10 FAQ">Что делать, если нас больше 4 человек?</div>
							<div class="col-xs-2 sprite"><div class="sprite_accordion"></div></div>
						</a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Four">
					<div class="panel-body">
						Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они
						просто повторяют, пока не достигнут нужный объём.
						<a href="#pick_room">Выбрать квест комнату</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<? include "write_letter.php";?>


</body>
</html>