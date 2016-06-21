<!-- Page Contacts (Контакты и модалка Написать письмо ) -->

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/fonts.css">
	<title>KQ Квест-комната</title>
	<script src="js/js.js" type="text/javascript"></script>
</head>
<body>

	<header class="contacts-header">
		<div class="container">
			<? include "header_board.php";?>
		</div>
	</header>

	<section class="map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0uoBQJR36OzohfpjqIE4cHirwUAfMz5F&width=100%&height=400&lang=ru_UA&sourceType=constructor&scroll=true"></script>
	</section>


	<section class="contacts">
		<div class="container">
			<div class="rowTitle">
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 contact">
					<p>
						Контакты
					</p>
				</div>
				<div class="col-md-6 col-lg-5 col-sm-6 col-xs-12 text-right button_letter">
					<a href="#myModal1" id="letter" data-toggle="modal">
						Написать письмо
					</a>
				</div>
				<div class="col-lg-1"></div>
			</div>
			<div class="rowContacts">
				<div class="col-md-6 col-lg-5 col-sm-5 col-xs-12">
					<div class="title_contacts">
						<p>
							Адрес
						</p>
					</div>
					<div class="adress">
						<p>
							г. Харьков, ул. Плехановская 92, корпус Б, 13 этаж
						</p>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
					<div class="title_contacts">
						<p>
							Телефон
						</p>
					</div>
					<div class="phone">
						<p>
							+38 (063) 10-70-380
						</p>
					</div>
				</div>
				<div class="col-md-3 col-lg-4 col-sm-3 col-xs-12">
					<div class="title_contacts">
						<p>
							E-mail
						</p>
					</div>
					<div class="email">
						<a href="#myModal" data-toggle="modal">
							game@kingquest.com.ua
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<? include "modal_write.php";?>
</body>
</html>