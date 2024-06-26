<?php 
	session_start(); 
	$_SESSION['sitename']='medturis';
	if(isset($_REQUEST['utm_source']))$_SESSION['utm_source']=$_REQUEST['utm_source']; 
	if(isset($_REQUEST['utm_medium']) )$_SESSION['utm_medium']=$_REQUEST['utm_medium']; 
	if(isset($_REQUEST['utm_campaign']) )$_SESSION['utm_campaign']=$_REQUEST['utm_campaign']; 
	if(isset($_REQUEST['utm_term']) )$_SESSION['utm_term']=$_REQUEST['utm_term'];
	if(isset($_REQUEST['utm_content']) )$_SESSION['utm_content']=$_REQUEST['utm_content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лечение в Индии</title> 
	<meta name="description" content="Медицинский туризм в Индии. Лечение по Европейским стандартам. В 3-5 раз дешевле!">
	<meta name="keywords" content="лечение в индии, мед туризм, медицинский туризм, лечение рака, лечение зрения, подтяжка лица, увеличение груди">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link href="./output.css" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css">
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6428952339805965",
    enable_page_level_ads: true
  });
</script> -->

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96485147-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43950929 = new Ya.Metrika({
                    id:43950929,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43950929" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</head>
<body>
	<div id="main"></div>
	<header>
		<div class="top_header">
			<div class="inside">
				<section>
					<a href="#" class="logo"><img src="img/logo.png" alt=""></a>
					<div class="desc">
						<p style = "font-weight:bold;">Медицинский туризм в Индии</p>
						<p>Безупречная альтернатива дорогостоящей западной медицине</p>
						 
					</div>
					<div class="right">
						<div class="tel_block">
							<a href="tel:+77474374335" class="tel">+7 (747) <span>437-43-35</span></a>
							<p>Перезвонить вам?</p>
						</div>
						<a href="#" class="modal_open" data-target="звонок с шапки">Перезвонить</a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</section>
			</div>
		</div>
		<nav>
			<section>
				<a href="#" class="menu_button"><img src="img/menu-button.png" alt=""></a>
				<ul>
					<li><a href="#main">Главная</a></li>
					<li><a href="#why">Почему индия</a></li>
					<li><a href="#take">О нас</a></li>
					<li><a href="#how">Что лечат</a></li>
					<li><a href="#why_prices">Сравнение цен</a></li>
					<li><a href="#cliniks">Клиники Индии</a></li>
					<li><a href="#reviews">Отзывы</a></li>
					<li><a href="#footer">Контакты</a></li>
				</ul>
			</section>
		</nav>
	</header>
	
	<div class="page_wrap">

		<div class="top_screen">
			<section>
				<h1>Медицинское обслуживание<i></i>в Индии</h1>
				<p>как в Европе или Израиле, только</p>
				<a href="#" class="modal_open wow bounceIn" data-target="в 3-5 раз дешевле на первом экране">в 3-5 раз дешевле</a>

				<ul style = "font-weight:bold;">
					<li >Клиники и врачи <i></i>с аккредитацией</li>
					<li>Лечение <i></i>без ожидания</li>
					<li>Полное сопровождение <i></i>от выезда до возвращения</li>
				</ul>
			</section>

			<div class="form_block wow fadeIn first">
				<section>
					<div class="content">
						<div class="head_form">
							Узнайте, <span>сколько стоит лечение</span> Вашего заболевания
						</div>
						<div class="img"><img src="img/fi1.png" alt=""></div>
						<form action="thankyou.php" method="get">
							<div class="inputs">
								<input type="text" placeholder="Ваше имя" name="name" required>
								<input type="text" placeholder="Ваш номер телефона" name="phone" required>
								<input type="hidden" name="formsended" value="Узнайте, сколько стоит лечение Вашего заболевания с первого экрана"> 
							<input type="hidden" name="referer" value="рефер отсутствует">	
								<div class="clearfix"></div>
							</div>
							<button class="wow bounceIn">Узнать стоимость</button>
						</form>
					</div>
				</section>
			</div>
		</div>

		<div class="why" id="why">
			<section>
				<h2>Почему за здоровьем едут в Индию?</h2>
				<div class="content">
					<div class="text wow fadeInRight">
						<p>
							За последние 15–20 лет Индия сильно рванула вперед, особенно в медицине. На моих глазах по всей стране появились настоящие «фабрики здоровья» нового века. 
							<span class="br"></span>
							Вся Западная Европа и Америка держится на прекрасных индийских врачах. Покойный офтальмолог Святослав Федоров учил индийских врачей делать операции на глазах, а сейчас сюда едут со всего мира, потому что качество отличное, а цена дешевле, чем даже у нас.
							<span class="br"></span>
							Я вот сам перешел на индийские аналоги — препарат один, оригинальный, без которого я не могу жить, стоит у нас в России 1,8–2,8 тыс. руб., а тут выпустили аналог, который работает так же прекрасно, проверено на себе. И стоит он 150 рупий (150 руб.)   <span>(По материалам  «Газета.Ru»)</span>
						</p>
						<div class="name">Александр Кадакин <span>бывший посол РФ в Индии</span></div>
					</div>
					<div class="img wow fadeInLeft"><img src="img/why.jpg" alt=""></div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>
		<div class="digits">
			<section>
				<div class="top_digits">
					<div class="item wow fadeIn">
						<div class="img">
							<div class="wrap">
								<span>270 000</span>
								<img src="img/d1.jpg" alt="">
							</div>
						</div>
						<div class="text">
							<article>
								Иностранцев ежегодно приезжают <i></i>в Индию лечиться. Большинство из США, <i></i>Великобритании и Западной Европы
							</article>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="item wow fadeIn">
						<div class="img">
							<div class="wrap">
								<span>150</span>
								<img src="img/d2.jpg" alt="">
							</div>
						</div>
						<div class="text">
							<article>
								Туристов в день прибывают <i></i>Ченнай – новую индийскую Мекку <i></i>здоровья со всего мира
							</article>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="bottom_digits">
					<div class="item wow fadeIn">
						<div class="img">
							<div class="wrap">
								<span>3</span>
								<img src="img/d3.jpg" alt="">
							</div>
						</div>
						<div class="text">
							<article>
								Дня длится самая сложная <i></i>и современная диагностика <i></i>в госпиталях Индии
							</article>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="item wow fadeIn">
						<div class="img">
							<div class="wrap">
								<span>22</span>
								<img src="img/d4.jpg" alt="">
							</div>
						</div>
						<div class="text">
							<article>
								Аккредитованных JCI <i></i>(Совместной Международной <i></i>Комиссией) медицинских <i></i>учреждений 
							</article>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="item wow fadeIn">
						<div class="img">
							<div class="wrap">
								<span>>10%</span>
								<img src="img/d5.jpg" alt="">
							</div>
						</div>
						<div class="text">
							<article>
								Врачей, работающих в США, <i></i>проходили обучение в <i></i>индийских университетах
							</article>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			</section>
		</div>

		<div class="take">
			<section id="take">
				<h2>
					<span>MedTurist</span> – возьмите наш опыт в медицинском <i></i>туризме, чтобы чувствовать себя в индии, как дома
				</h2>

				<div class="content_block">
					<div class="top_content">
						<p>
							Компания MedTurist, представляет в Казахстане международную компанию Deva Medical Tours, развивающую медицинский туризм во всем мире. <span>Вы почувствуете заботу с первых дней обращения:</span>
						</p>
						<img src="img/logo.png" alt="">
						<div class="clearfix"></div>
					</div>

					<ul>
						<li class="wow fadeInUp">
							<div class="img">
								<img src="img/t1.jpg" alt="">
							</div>
							<p>
								Подберем лучшее медицинское учреждение по профилю вашего заболевания, согласуем все тонкости вашего пребывания там
							</p>
						</li>
						<li class="wow fadeInUp">
							<div class="img">
								<img src="img/t2.jpg" alt="">
							</div>
							<p>
								Поможем получить <i></i>медицинскую визу
							</p>
						</li>
						<li class="wow fadeInUp">
							<div class="img">
								<img src="img/t3.jpg" alt="">
							</div>
							<p>
								Купим билеты, встретим <i></i>и проводим
							</p>
						</li>

						<li class="wow fadeInUp">
							<div class="img">
								<img src="img/t4.jpg" alt="">
							</div>
							<p>
								Обеспечим переводом  медицинских документов и переводчиком
							</p>
						</li>
						<li class="wow fadeInUp">
							<div class="img">
								<img src="img/t5.jpg" alt="">
							</div>
							<p>
								Позаботимся <i></i>об отеле
							</p>
						</li>
						<li class="wow fadeInUp">
							<div class="img">
								<img src="img/t6.jpg" alt="">
							</div>
							<p>
								Покажем достопримечательности Индии, организуем любую туристическую программу
							</p>
						</li>
					</ul>


					<div class="bottom">
						Наша специализация – это предоставление лучших медицинских <i></i>учреждений Индии с высококвалифицированными докторами
					</div>
				</div>
			</section>

			<div class="form_block wow fadeIn more">
				<section>
					<div class="content">
						<div class="head_form">
							<span>Узнайте больше</span> о наших услугах
						</div>
						<div class="img"><img src="img/fi2.png" alt=""></div>
						<form action="thankyou.php" method="get">
							<div class="inputs">
								<input type="text" placeholder="Ваше имя" name="name" required>
								<input type="text" placeholder="Ваш номер телефона" name="phone" required>
								<input type="hidden" name="formsended" value="Узнайте больше о наших услугах из блока MedTurist – возьмите наш опыт"> 
								<input type="hidden" name="referer" value="рефер отсутствует">	
								<div class="clearfix"></div>
							</div>
							<button class="wow bounceIn">получить бесплатную консультацию</button>
						</form>
					</div>
				</section>
			</div>
		</div>

		<div class="how" id="how">
			<section>
				<h2>Что и как лечат в Индии</h2>

				<div class="head_desc">
					От профилактики,  оздоровительных практик  – до пересадки органов <i></i>и восстановления после операций и заболеваний
				</div>

				<ul>
					<li class="wow fadeIn">
						<span>01</span>
						<div class="inside">
							<div class="img"><img src="img/how1.png" alt=""></div>
							<h3>Диагностика</h3>
							<p>Быстро и эффективно – <i></i>от 2 часов до 3 дней</p>
						</div>
					</li>

					<li class="wow fadeIn">
						<span>02</span>
						<div class="inside">
							<div class="img"><img src="img/how2.png" alt=""></div>
							<h3>Лечение</h3>
							<p>По лучшим мировым <i></i>технологиям, без ожидания <i></i>и дополнительных платежей</p>
						</div>
					</li>

					<li class="wow fadeIn">
						<span>03</span>
						<div class="inside">
							<div class="img"><img src="img/how3.png" alt=""></div>
							<h3>Оздоровление</h3>
							<p>Настоящая аюрведа <i></i>творит чудеса</p>
						</div>
					</li>
				</ul>
			</section>
		</div>

		<div class="diagnose_list">
			<section>
				<div class="item">
					<div class="img wow fadeIn">
						<img src="img/dl1.jpg" alt="">
					</div>
					<div class="desc wow fadeInUp">
						<div class="head_item">
							<div class="huge">Диагностика</div>
							<h3>Диагностика</h3>
							<div class="line"></div>
							<div class="desc_small">
								Главный принцип: исследования – для выявления <i></i>причины болезни, а не ради исследований
							</div>
							<article>
								Например, в одном из госпиталей за $80 и четыре часа можно пройти диспансеризацию: рентген грудной клетки, УЗИ органов малого таза, развернутый анализ крови с нагрузкой и без, осмотр гинеколога (для женщин) или уролога (для мужчин) с анализами. С расшифровкой данных знакомят сразу, направляя на дополнительные исследования и к узкопрофильным специалистам. За $580 можно сделать развернутую диагностику, в которую войдет МРТ всего тела.
							</article>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>


				<div class="item">
					<div class="img wow fadeIn">
						<img src="img/dl2.jpg" alt="">
					</div>
					<div class="desc wow fadeInUp">
						<div class="head_item">
							<div class="huge">Лечение</div>
							<h3>Лечение</h3>
							<div class="line"></div>
							<div class="desc_small">
								Три направления, в которых индийские клиники <i></i>добилась невероятных успехов
							</div>
							<article>
								<h4>Лечение рака</h4>
								Успешность излечения на уровне европейских клиник. 5-летняя выживаемость онкобольных составляет около 80% (в Казахстане - 43%). В современных индийских госпиталях нет понятия «высокотехнологичная медицинская помощь», потому что все используемое для диагностики и лечения рака оборудование отвечает последним научным достижениям. сверхточные кибер-ножи для неинвазивного лечения, роботы «Да Винчи» для проведения хирургических операций, интраоперационная радио- и химиотерапия.

								<div class="list_article">
									<div class="inside">
										<ul>
											<li><span>Рак молочной железы</span></li>
											<li><span>Рак почки</span></li>
											<li><span>Рак горла</span></li>
											<li><span>Рак простаты</span></li>
											<li><span>Рак желудка</span></li>
											<li><span>Рак кишечника</span></li>
										</ul>
									</div>
								</div>
							</article>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="item">
					<div class="img wow fadeIn">
						<img src="img/dl3.jpg" alt="">
					</div>
					<div class="desc wow fadeInUp">
						<div class="head_item">
							<article>
								<h4>Эстетическая хирургия</h4>

								<ul class="details">
									<li>контур живота и бедер</li>
									<li>липосакция (удаления жира)</li>
									<li>лазерная шлифовка кожи</li>
								</ul>

								<h5><span>Косметическая хирургия лица</span></h5>

								<ul class="details">
									<li>пластическая операция век,</li>
									<li>лифтинг бровей,</li>
									<li>омоложение бровное, лобное омоложение лица,</li>
									<li>отопластика</li>
									<li>подтяжка лица, контур подбородка </li>
									<li>удаление шрамов</li>
									<li>ринопластика</li>
									<li>восстановление волос</li>
								</ul>

								<h5><span>Грудная хирургия</span></h5>

								<ul class="details">
									<li>увеличение груди,</li>
									<li>маммопластика,</li>
									<li>подтяжка груди,</li>
									<li>коррекция сосков,</li>
									<li>брахиопластика,</li>
									<li>редуция сосков</li>
								</ul>

								<h5><span>Генитальная хирургия</span></h5>
								
								<ul class="details">
									<li>омоложение женских половых органов (вагинопластика) </li>
									<li>восстановление гимена</li>
								</ul>
								
							</article>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>


				<div class="item">
					<div class="img wow fadeIn">
						<img src="img/dl4.jpg" alt="">
					</div>
					<div class="desc wow fadeInUp">
						<div class="head_item">
							<article>
								<h4>Ортопедическая хирургия</h4>

								Индийские врачи одними из первых в мире начали широко использовать процедуру восстановления суставного хряща – менее инвазивную альтернативу тотальной пересадке тазобедренного сустава.

								<div class="list_article">
									<div class="inside">
										<ul>
											<li><span>артроскопия,</span></li>
											<li><span>замена суставов</span></li>
										</ul>
									</div>
								</div>

							</article>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

			</section>
		</div>

		<div class="more_info">
			<section>
				<h3>А также другие направления лечения</h3>
				
				<div class="list">
					<div class="item">
						<h5>Трансплантация</h5>
						<ul>
							<li>пересадка печени, </li>
							<li>почки,</li>
							<li>костного мозга</li>
						</ul>
					</div>

					<div class="item">
						<h5>Офтальмология</h5>
						<ul>
							<li>пересадка роговицы,</li>
							<li>лечение косоглазия,</li>
							<li>отслоения сетчатки,</li>
							<li>катаракты</li>
						</ul>
					</div>

					<div class="item">
						<h5>Нейрохирургия</h5>
						<ul>
							<li>удаление фрагментов костей черепа,</li>
							<li>трепанация черепа,</li>
							<li>каротидная эндартерэктомия,</li>
							<li>хирургия плечевого сплетения,</li>
							<li>краниопластика</li>
						</ul>
					</div>

					<div class="item">
						<h5>Гинекология</h5>
						<ul>
							<li>миомэктомия (удаление миомы),</li>
							<li>удаление яичника,</li>
							<li>эндометриоз</li>
						</ul>
					</div>
				</div>
			</section>
			

			<div class="form_block wow fadeIn med">
				<section>
					<div class="content">
						<div class="head_form">
							Узнайте больше <span>о направлениях лечения</span>
						</div>
						<div class="img"><img src="img/fi3.png" alt=""></div>
						<form action="thankyou.php" method="get">
							<div class="inputs">
								<input type="text" placeholder="Ваше имя" name="name" required>
								<input type="text" placeholder="Ваш номер телефона" name="phone" required>
								<input type="hidden" name="formsended" value="Узнайте больше о направлениях лечения"> 
								<input type="hidden" name="referer" value="рефер отсутствует">	
								<div class="clearfix"></div>
							</div>
							<button class="wow bounceIn">получить бесплатную консультацию</button>
						</form>
					</div>
				</section>
			</div>
		</div>	

		<div class="diagnose_list">
			<section>
				<div class="clearfix"></div>
				<div class="item">
					<div class="img wow fadeIn">
						<img src="img/dl5.jpg" alt="">
					</div>
					<div class="desc wow fadeInUp">
						<div class="head_item">
							<div class="huge">Оздоровление</div>
							<h3>Оздоровление</h3>
							<div class="line"></div>
							<div class="desc_small">
								Верните гармонию организму сейчас,<i></i>не ждите болезней
							</div>
							<article class="empty">
								Традиционной индийской медицине долголетия – аюрведе – более 5000 лет. В Индии давно нашли ответы на многие вопросы, связанные со здоровьем человека. <br><br>
								За 2-3 недели в аюрведической клинике Индии вы восстановите равновесие в организме, что поможет в излечении или улучшении состояния при диабете, астме, ревматизме, гипертонии и других заболеваниях.

							</article>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
		</div>

		<div class="attention wow bounceIn">
			<section>
				<h4>Внимание</h4>
				<p>
					Не доверяйте всем подряд аюрведическим центрам свое здоровье! Мы подберем вам аккредитованных докторов соответствующей квалификации и комфортабельные клиники
				</p>
				<div class="clearfix"></div>
			</section>
		</div>

		<div class="form_block wow fadeIn full">
			<section>
				<div class="content">
					<div class="head_form">
						<span>Интересуетесь</span> традиционной индийской медициной?
					</div>
					<p>
						<span>Оставьте заявку до 1 мая</span>, и мы пришлем вам бесплатно на электронную почту буклет об аюрведе
					</p>
					<form action="thankyou.php" method="get">
						<div class="inputs">
							<input type="text" placeholder="Ваше имя" name="name" required>
							<input type="text" placeholder="Ваш номер телефона" name="phone" required>
							<input type="hidden" name="formsended" value="Интересуетесь традиционной индийской медициной?"> 
							<input type="hidden" name="referer" value="рефер отсутствует">	
							<button class="wow bounceIn">оставить заявку</button>
						</div>
					</form>
				</div>
			</section>
		</div>

		<div class="why_prices" >
			<section>
				<h2>
					<span>Почему цены</span> на качественное медицинское <i></i>обслуживание в Индии ниже, чем в Европе, США
				</h2>

				<ul>
					<li class="wow fadeIn">
						<div class="img">
							<div class="wrap">
								<img src="img/wp1.jpg" alt="">
							</div>
						</div>
						<div class="desc">
							<p>
								Общий уровень цен в стране, ниже расходы на заработную плату врачам, медперсоналу, содержание клиник. 
							</p>
						</div>
						<div class="clearfix"></div>
					</li>

					<li class="wow fadeIn">
						<div class="img">
							<div class="wrap">
								<img src="img/wp2.jpg" alt="">
							</div>
						</div>
						<div class="desc">
							<p>
								Собственные недорогие эффективные лекарства, медицинское оборудование
							</p>
						</div>
						<div class="clearfix"></div>
					</li>

					<li class="wow fadeIn">
						<div class="img">
							<div class="wrap">
								<img src="img/wp3.jpg" alt="">
							</div>
						</div>
						<div class="desc">
							<p>
								Стремление завоевать лидерство в мировом медицинском туризме. Государственный контроль за качеством медуслуг.
							</p>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>

				<div class="price_block" id="why_prices">
					<div class="head_price">
						<h3>Сравнение цен</h3>
						<p>(примерно)</p>
					</div>
					
					<div class="table_wrap">
						<table cellpadding="0" cellspacing="0" border="0">
							<thead>
								<tr>
									<td>Медицинские процедуры</td>
									<td>США</td>
									<td style="font-weight: bold; color: red;">Индия</td>
									<td>Тайланд</td>
									<td>Малайзия</td>
									<td>Польша</td>
									<td>Сингапур</td>
									<td>Турция</td>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Шунтирование сердца</td>
									<td>123 000 $</td>
									<td style="font-weight: bold; color: red;">7 900 $</td>
									<td>15 000 $</td>
									<td> 12 100$</td>
									<td>14 000$</td>
									<td>17 200 $</td>
									<td>13 900 $</td>
								</tr>

								<tr>
									<td>Пластичеся операция на сосудах</td>
									<td>28 000 $</td>
									<td style="font-weight: bold; color: red;">8 000 $</td>
									<td>4 200 $</td>
									<td>8 000 $</td>
									<td>5 300 $</td>
									<td>13 400 $</td>
									<td>4 800 $</td>
								</tr>

								<tr>
									<td>Замена клапана сердца</td>
									<td>170 000 $</td>
									<td style="font-weight: bold; color: red;">9 500 $</td>
									<td>17 200 $</td>
									<td>13 500 $</td>
									<td>19 000 $</td>
									<td>16 900 $</td>
									<td>17 200 $</td>
								</tr>

								<tr>
									<td>Замена тазобедренного сустава</td>
									<td>40 364 $</td>
									<td style="font-weight: bold; color: red;">7 200 $</td>
									<td>17 000 $</td>
									<td>8 000 $</td>
									<td>5 500 $</td>
									<td>13 900 $</td>
									<td>13 900 $</td>
								</tr>

								<tr>
									<td>Замена коленного сустава</td>
									<td>35 000 $</td>
									<td style="font-weight: bold; color: red;">6 600 $</td>
									<td>14 000 $</td>
									<td>7 700 $</td>
									<td>8 200 $</td>
									<td>16 000 $</td>
									<td>10 400 $</td>
								</tr>

								<tr>
									<td>Спондилодез</td>
									<td>110 000 $</td>
									<td style="font-weight: bold; color: red;">10 300 $</td>
									<td>9 500 $</td>
									<td>6 000 $</td>
									<td>6 200 $</td>
									<td>12 800 $</td>
									<td>16 800 $</td>
								</tr>

								<tr>
									<td>Зубной имплант</td>
									<td>2 500 $</td>
									<td style="font-weight: bold; color: red;">900 $</td>
									<td>1 720 $</td>
									<td>1 500 $</td>
									<td>925 $</td>
									<td>2 700 $</td>
									<td>1 100 $</td>
								</tr>

								<tr>
									<td>Шунтирование желудка</td>
									<td>25 000 $</td>
									<td style="font-weight: bold; color: red;">7 000 $</td>
									<td>16 800 $</td>
									<td>9 900 $</td>
									<td>9 750 $</td>
									<td>13 700 $</td>
									<td>13 800 $</td>
								</tr>

								<tr>
									<td>Гистерэктомия</td>
									<td>15 400 $</td>
									<td style="font-weight: bold; color: red;">3 200 $</td>
									<td>3 650 $</td>
									<td>4 200 $</td>
									<td>2 200 $</td>
									<td>10 400 $</td>
									<td>7 000 $</td>
								</tr>

								<tr>
									<td>Грудные импланты</td>
									<td>6 400 $</td>
									<td style="font-weight: bold; color: red;">3 000 $</td>
									<td>3 500 $</td>
									<td>3 800 $</td>
									<td>3 900 $</td>
									<td>8 400 $</td>
									<td>4 500 $</td>
								</tr>

								<tr>
									<td>Подтяжка лица</td>
									<td>11 000 $</td>
									<td style="font-weight: bold; color: red;">3 500 $</td>
									<td>3 950 $</td>
									<td>3 550 $</td>
									<td>4 000 $</td>
									<td>440 $</td>
									<td>6 700 $</td>
								</tr>

								<tr>
									<td>Подтяжка живота</td>
									<td>8 000 $</td>
									<td style="font-weight: bold; color: red;">3 500 $</td>
									<td>5 300 $</td>
									<td>3 900 $</td>
									<td>3 550 $</td>
									<td>4 650 $</td>
									<td>4 000 $</td>
								</tr>

								<tr>
									<td>ЛАСИК</td>
									<td>4 000 $</td>
									<td style="font-weight: bold; color: red;">1 000 $</td>
									<td>2 310 $</td>
									<td>3 450 $</td>
									<td>1 850 $</td>
									<td>3 800 $</td>
									<td>1 700 $</td>
								</tr>

								<tr>
									<td>Операция по удалению катаракты</td>
									<td>3 500 $</td>
									<td style="font-weight: bold; color: red;">1 500 $</td>
									<td>1 800 $</td>
									<td>3 000 $</td>
									<td>750 $</td>
									<td>3 250 $</td>
									<td>1 600 $</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</section>

			<div class="form_block wow fadeIn wp first">
				<section>
					<div class="content">
						<div class="head_form">
							Оставьте заявку, чтобы узнать, <span>сколько стоит в Индии лечение Вашего заболевания</span>
						</div>
						<div class="img"><img src="img/fi1.png" alt=""></div>
						<form action="thankyou.php" method="get">
							<div class="inputs">
								<input type="text" placeholder="Ваше имя" name="name" required>
								<input type="text" placeholder="Ваш номер телефона" name="phone" required>
								<input type="hidden" name="formsended" value="Оставьте заявку, чтобы узнать, сколько стоит в Индии лечение Вашего заболевания под блоком сравнений цен"> 
								<input type="hidden" name="referer" value="рефер отсутствует">	
								<div class="clearfix"></div>
							</div>
							<button class="wow bounceIn">оставить заявку</button>
						</form>
					</div>
				</section>
			</div>
		</div>

		<div class="cliniks" id="cliniks">
			<section>
				<h2>Клиники Индии</h2>
				<div class="list">
					<div class="item wow fadeInUp">
						<img src="img/cl1.jpg" alt="">
						<div class="desc">
							<strong>Госпиталь Аполло</strong>
							<p>(Apollo Hospital) </p>
						</div>
						<article>
							Часть Аполло Хоспитал групп, более 50 медицинских и хирургических дисциплин. АккредитованСовместной Международной Комиссией США.
							Предлагает самые современные клинические услуги в кардиологии, онкологии, неврологии, нефрологии, ортопедии, урологии, трансплантации, гинекологии, педиатрии, косметических операциях, экстренной помощи.
						</article>
					</div>

					<div class="item wow fadeInUp">
						<img src="img/cl2.jpg" alt="">
						<div class="desc">
							<strong>Госпиталь Фортис</strong>
							<p>(Fortis Hospital)</p>
						</div>
						<article>
							В Нойде, вблизи Дели. Входит в сеть медицинских госпиталей Fortis Healthcare представленную во многих странах Азии.
							Имеет собственную сеть кардиоцентров.
							Является центром повышения квалификации в ортопедии, неврологии, онкологии,   в экстракорпоральном оплодотворении, хирургии с минимальным вмешательством. Ведущие направления – кардиологическая хирургия с минимальным вмешательством и онкология.
						</article>
					</div>

					<div class="item wow fadeInUp">
						<img src="img/cl3.jpg" alt="">
						<div class="desc">
							<strong>Макс Госпиталь</strong>
							<p>(Max Hospital)</p>
						</div>
						<article>
							10 госпиталей и 2 мед. центра. Более 2100 ведущих докторов в сферах кардиологии и сердечных операций, неврологии, ортопедии и артропластики (операция по замене сустава). 
							Лечение рака, операции спинного мозга, хирургия с минимальным вмешательством, метаболическая и бариатрическая хирургия, эстетическая и реконструктивная хирургии, урология и трансплантация почек, кохлеарная трансплантация, ЛОР, педиатрия, акушерство и гинекология, включая ЭКО, реанимация, реабилитационные услуги и все вспомогательные специальности
						</article>
					</div>

					<div class="item wow fadeInUp">
						<img src="img/cl4.jpg" alt="">
						<div class="desc">
							<strong>Меданта</strong>
							<p>(Medanta)</p>
						</div>
						<article>
						– Один из крупнейших в Индии специализированных институтов, где ведется не только лечение, но и научные исследования, внедрение новейших технологий. Клинический центр с палатами на 1250 пациентов
						Ведущие направления: 
						онкология, хирургия , кардиология и кардиохирургия
						</article>
					</div>

					<div class="item wow fadeInUp">
						<img src="img/cl5.jpg" alt="">
						<div class="desc">
							<strong>Госпиталь Джайпи</strong>
							<p>(Jaypee Hospital)</p>
						</div>
						<article>
							В составе Джайпи Групп расположен в Нойде.  Отделения больницы:
							Ухо- горло- нос
							Нейробиология (мозг и позвоночник)
							Мать и ребенок
							Офтальмология
							Кости и суставы
							Пластическая и восстановительная хирургия
							Пересадка печени
							Хирургический мини-доступ
							Институт сердца
						</article>
					</div>

					<div class="item wow fadeInUp">
						<img src="img/cl6.jpg" alt="">
						<div class="desc">
							<strong>Госпиталь Артемис</strong>
							<p>(Artemis Hospital)</p>
						</div>
						<article>
							Артемис - первая больница, аккредитованная МПМ и NABH в Гургаоне. Институт здоровья Артемис является медицинским учреждением мирового уровня. Основные направления его деятельности - это ортопедия, онкология, сердечно-сосудистые заболевания, нейрохирургия, педиатрия.
						</article>
					</div>
				</div>
			</section>
		</div>

		<div class="how_go">
			<section>
				<h2>Как поехать в Индию <span>для лечения и оздоровления</span></h2>

				<div class="list">
					<div class="item wow fadeIn">
						<p>Оставляете заявку на сайте, <i></i>мы с Вами связываемся и даем <i></i>бесплатную консультацию</p>
						<div class="img"><img src="img/hg1.jpg" alt=""></div>
					</div>
					<div class="item wow fadeIn">
						<div class="img"><img src="img/hg2.jpg" alt=""></div>
						<p>Заполняете специальную <i></i>форму, чтобы мы могли <i></i>начать подбор клиники и врача</p>
					</div>
					<div class="item wow fadeIn">
						<p>Знакомим Вас <i></i>с предложениями</p>
						<div class="img"><img src="img/hg3.jpg" alt=""></div>
					</div>
					<div class="item wow fadeIn">
						<div class="img"><img src="img/hg4.jpg" alt=""></div>
						<p>Заключаем договор, <i></i>прописываем весь <i></i>комплекс услуг</p>
					</div>
					<div class="item wow fadeIn">
						<p>Готовим и организуем <i></i>поездку</p>
						<div class="img"><img src="img/hg5.jpg" alt=""></div>
					</div>
				</div>
			</section>
		</div>

		<section >
			<h1 class="ozdorov_products_h2 text-3xl font-bold text-center md:text-5xl">Оздоровительные продукты</h1>
			<div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 gap-5 ozdorov_products">
				<div class="mb-15 md:mb-20 sm:mb-20 xs:flex xs:justify-center m-auto">
					<div class="products_block md:w-full sm:w-full w-3/4">
						<div class="products_block_img_bg">
							<div class="products_img">
								<img src="./img/dariler/bevon.png" alt="">
							</div>
						</div>
						<div class="products_block_content">
							<h3 class="font-bold mb-1.5 text-xl">Bevon Suspension</h3>
							<article>
								<p class="mb-2 text-sm">Bevon suspension поливитаминная и минеральная добавка для общего поддержания здоровья. <a href="#dari_modal" class="fancybox custom_hover_link"> Узнать больше..</a></p>
							</article>
							<!-- <div class="products_price mb-1.5">
								<p class="font-bold text-2xl custom_color mr-2">6000 тг</p>
								<p class=""><s>7200 тг</s></p>
							</div> -->
							<button class="custom_button">Подробнее</button>
						</div>
					</div>
				</div>
				<div class="mb-15 md:mb-20 sm:mb-20 xs:flex xs:justify-center m-auto">
					<div class="products_block md:w-full sm:w-full w-3/4">
						<div class="products_block_img_bg">
							<div class="products_img">
								<img src="./img/dariler/coralium.png" alt="">
							</div>
						</div>
						<div class="products_block_content">
							<h3 class="font-bold mb-1.5 text-xl">Coralium-D3 Tablet</h3>
							<article>
								<p class="mb-2">Таблетка Coralium-D3 кальций и витамин D3 для поддержания здоровья костей и нервной системы. <a href="#dari_modal2" class="fancybox custom_hover_link">  Узнать больше..</a></p>
							</article>
							<!-- <div class="products_price mb-1.5">
								<p class="font-bold text-2xl custom_color mr-2">6000 тг</p>
								<p class=""><s>7200 тг</s></p>
							</div> -->
							<button class="custom_button">Подробнее</button>
						</div>
					</div>
				</div>
				<div class="mb-20 md:mb-20 sm:mb-20 xs:flex xs:justify-center m-auto">
					<div class="products_block  md:w-full sm:w-full w-3/4">
						<div class="products_block_img_bg">
							<div class="products_img">
								<img src="./img/dariler/tata.png" alt="">
							</div>
						</div>
						<div class="products_block_content">
							<h3 class="font-bold mb-1.5 text-xl">Tata Salmon Omega 3 Fish Oil </h3>
							<article>
								<p class="mb-2">Капсула с рыбьим жиром Tata Омега-3 из лосося для здоровья сердца и борьбы с воспалениями. <a href="#dari_modal3" class="fancybox custom_hover_link"> Узнать больше..</a></p>
							</article>
							<!-- <div class="products_price mb-1.5">
								<p class="font-bold text-2xl custom_color mr-2">6000 тг</p>
								<p class=""><s>7200 тг</s></p>
							</div> -->
							<button class="custom_button">Подробнее</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="form_block wow fadeIn group">
			<section>
				<div class="content">
					<div class="head_form">
						<span>У вас есть вопросы?</span>
					</div>
					<p>Задайте, мы обязательно ответим</p>
					<div class="img"><img src="img/group.png" alt=""></div>
					<form action="thankyou.php" method="get">
						<div class="inputs">
							<input type="text" placeholder="Ваше имя" name="name" required>
							<input type="text" placeholder="Ваш номер телефона" name="phone" required>
							<div class="clearfix"></div>
							<input type="text" placeholder="Ваш вопрос" class="last" name="quastion" required>
						</div>
						<input type="hidden" name="formsended" value="У вас есть вопросы?"> 
						<input type="hidden" name="referer" value="рефер отсутствует">
						<button class="wow bounceIn">Задать вопрос</button>
					</form>
				</div>
			</section>
		</div>

		<div class="faq">
			<section>
				<h2>Часто задаваемые вопросы</h2>
				<div class="list">
					<div class="item wow fadeInUp">
						<div class="head_faq">
							Как решается вопрос общения, если я не говорю по-английски? Ведь нужно каждый день все понимать во время лечения?
						</div>
						<article>
							У Вас не будет языковых проблем. Клиники, с которыми мы сотрудничаем, не первый год принимают пациентов из Казахстана, России и многих других стран. Мы организуем работу переводчика для Вас с казахского, русского или другого языка на определенное число часов в день. Медицинские документы переведем на английский, им доктора Индии отлично владеют.
						</article>
					</div>

					<div class="item wow fadeInUp">
						<div class="head_faq">
							Если мне не нужно будет помогать с билетами, визой, а только подобрать лучшего доктора по моему заболеванию, такую услугу Вы оказываете?
						</div>
						<article>
							Да, вы можете обратиться к нам по любым вопросам, связанным с лечением, оздоровлением в Индии. Мы подберем Вам нужного специалиста. Оставьте заявку на сайте и все обсудим.
						</article>
					</div>

					<div class="item wow fadeInUp">
						<div class="head_faq">
							Я хочу пройти аюрведическое лечение – очищение организма, программу по снижению веса. А потом неделю провести  у моря, или посмотреть достопримечательности Индии. Можете вы организовать мне индивидуальную программу под даты отпуска?
						</div>
						<article>
							Конечно, у нас нет массовых туров, мы работаем только индивидуально. Подберем аюрведическую клинику с нужной программой. Вы можете остановиться прямо в ней или приезжать на процедуры из отеля. Гостиницу мы также подберем по вашему запросу. Затем организуем трансфер на пляжный курорт, или разработаем другую туристическую программу по вашему желанию.
						</article>
					</div>

					<div class="item wow fadeInUp">
						<div class="head_faq">
							Мне бы не хотелось, чтобы о характере моего лечения в Индии узнали на работе, как соблюдается конфиденциальность?
						</div>
						<article>
							Мы заключаем договор, в котором обговариваем все условия. О характере медицинской помощи вам никто не узнает, если вы не хотите.   
						</article>
					</div>
				</div>

				<div class="button">
					<a href="#" class="faq_open" data-target="заявка с блока вопрос-ответ">Задать вопрос</a>
				</div>
			</section>
		</div>

		<div class="reviews" id="reviews">
			<section>
				<h2>Отзывы клиентов <span>MedTurist</span></h2>

				<div class="list">
					<div class="item wow fadeInUp">
						<div class="head_review">
							<div class="img"><img src="img/r11.png" alt=""></div>
							<div class="desc">
								<div class="woman">Клара</div>
								<p>Казахстан / Астана</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<article>
							<p>
								Меня зовут Клара. Я приехала в Индию со своей дочерью, у которой в течение 1,5 лет случались внезапные приступы. После безуспешного лечения в Алматы, Астане и Самарканде мы обратились к Med Turist Deva ... <a href="#review_modal" class="fancybox">Читать дальше</a>
							</p>
						</article>
					</div>

					<div class="item wow fadeInUp">
						<div class="head_review">
							<div class="img"><img src="img/r22.png" alt=""></div>
							<div class="desc">
								<div class="woman">Зоя</div>
								<p>Узбекистан / Конырат</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<article>
							<p>
								Меня зовут Зоя, и я из Узбекистана. С 2014 года я лечусь с кистой яичника. Подруга порекомендовала мне компанию "Медтурист Дева", услышав об успешном лечении в Индии. С того момента, как я обратилась к ним, они позаботились обо всем. После ... <a href="#review_modal2" class="fancybox">Читать дальше</a>
							</p>
						</article>
					</div>

					<div class="item wow fadeInDown">
						<div class="head_review">
							<div class="img"><img src="img/r33.png" alt=""></div>
							<div class="desc">
								<div class="woman">Айнур </div>
								<p>Казахстан / Алматы</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<article>
							<p>
								Я обратилась в эту компанию для своего 3-летнего ребенка.С самого рождения у него было серьезное заболевание кожи, из-за которого он не мог стоять. Мы обратились за лечением в Индию из-за ... <a href="#review_modal3" class="fancybox">Читать дальше</a>
							</p>
						</article>
					</div>

					<div class="item wow fadeInDown">
						<div class="head_review">
							<div class="img"><img src="img/r44.png" alt=""></div>
							<div class="desc">
								<div class="woman">Айнагуль</div>
								<p>Казахстан</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<article>
							<p>
								Когда я пришел в MedTurist Deva, Рамазан и Райан Бей оказали мне огромную помощь. После диагностики моего состояния врачи рекомендовали пересадку печени, которая в конечном итоге спасла мне жизнь ...<a href="#review_modal4" class="fancybox">Читать дальше</a>
							</p>
						</article>
					</div>
				</div>
			</section>
		</div>

		<div class="pre_foot">
			<section>
				<a href="#" class="logo"><img src="img/logo2.png" alt=""></a>
				<div class="center">
					<div class="head_center">
						<p>Стоимость не может быть преградой для лечения</p>
						<h3>Ваше здоровье – бесценно</h3>
					</div>
					<div class="bottom_center">
						Медицинское обслуживание в Индии, <span>как в Европе или Израиле, только в 3-5 раз дешевле</span>
					</div>
				</div>
				<ul>
					<li>Клиники и врачи <i></i>с аккредитацией</li>
					<li>Лечение <i></i>без ожидания</li>
					<li>Полное сопровождение <i></i>от выезда до возвращения</li>
				</ul>
			</section>

			<div class="form_block wow fadeIn first">
				<section>
					<div class="content">
						<div class="head_form">
							Узнайте, <span>сколько стоит лечение</span> Вашего заболевания
						</div>
						<div class="img"><img src="img/fi1.png" alt=""></div>
						<form action="thankyou.php" method="get">
							<div class="inputs">
								<input type="text" placeholder="Ваше имя" name="name" required>
								<input type="text" placeholder="Ваш номер телефона" name="phone" required>
								<input type="hidden" name="formsended" value="Узнайте, сколько стоит лечение Вашего заболевания перед подвалом"> 
								<input type="hidden" name="referer" value="рефер отсутствует">	
								<div class="clearfix"></div>
							</div>
							<button class="wow bounceIn">Узнать стоимость</button>
						</form>
					</div>
				</section>
			</div>
		</div>

		<footer id="footer">
			<section>
				<div class="left">
					<p>Медицинский туризм в Индию </p>
					<p>Безупречная альтернатива дорогостоящей западной медицине</p>
				</div>
				<div class="right">
					<div class="tel_block">
						<a href="tel:+77474374335" class="tel">+7 (747) <span>437-43-35</span></a>
						<p>Перезвонить вам?</p>
					</div>
					<a href="#" class="modal_open wow bounceIn" data-target="звонок с подвала">Перезвонить</a>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</section>
		</footer>

		<div class="hidden">
			<div class="modal" id="modal">
				<h3>ОСТАВИТЬ ЗАЯВКУ</h3>
				<p>
					Оставьте заявку и наш специалист свяжется с Вами в ближайшее время!
				</p>
				<form action="thankyou.php" method="get">
					<input type="text" placeholder="Ваше имя" required name="name">
					<input type="text" placeholder="Номер телефона" name="phone" required>
					<input type="hidden" name="formsended" value="" id="formsended"> 
					<input type="hidden" name="referer" value="рефер отсутствует">	
					<button class="button ">Отправить</button>
				</form>
			</div>

			<div class="modal" id="modal2">
				<h3>ОСТАВИТЬ ЗАЯВКУ</h3>
				<p>
					Оставьте заявку и наш специалист свяжется с Вами в ближайшее время!
				</p>
				<form action="thankyou.php" method="get">
					<input type="text" placeholder="Ваше имя" required name="name">
					<input type="text" placeholder="Номер телефона" name="phone" required>
					<input type="text" placeholder="Ваш вопрос" name="quastion" required>
					<input type="hidden" name="formsended" value="" id="formsended2"> 
					<input type="hidden" name="referer" value="рефер отсутствует">	
					<button class="button ">отправить</button>
				</form>
			</div>

			<div class="modal" id="success">
				<h3>Спасибо!</h3>
				<p>Наш специалист свяжется с Вами в ближайшее время!</p>
			</div>

			<div class="modal" id="notsended">
				<h3>Заявка не отправлена</h3>
				<p>Попробуйте еще раз</p>
			</div>

			<div class="modal review" id="dari_modal">
				<h3>Bevon suspension</h3>
				<div class="flex justify-center items-center">
					<div class="products_block_img_bg">
						<div class="products_img">
							<img src="./img/dariler/bevon.png" alt="">
						</div>
					</div>
				</div>
				<article>
					Bevon suspension | Мультивитаминная и мультиминеральная добавка - это диетическая добавка, обогащенная минералами, поливитаминами и антиоксидантами, которые помогают удовлетворить потребности в питательных веществах и поддерживать оптимальное здоровье. Витамины и минералы, содержащиеся в этом сиропе, пополняют запасы питательных веществ в организме, что способствует правильному функционированию сердца, кишечника и нервной системы. Благодаря наличию в этом сиропе природных антиоксидантов, он борется со стрессом, переутомлением, слабостью и истощением, замедляет дегенеративные процессы старения и повышает сопротивляемость организма инфекциям.
				</article>
			</div>

			<div class="modal review" id="dari_modal2">
				<h3>Coralium-D3 Tablet</h3>
				<div class="flex justify-center items-center">
					<div class="products_block_img_bg">
						<div class="products_img">
							<img src="./img/dariler/coralium.png" alt="">
						</div>
					</div>
				</div>
				<article>
					Таблетки Coralium-D3 | кальциевая добавка содержат сбалансированное сочетание карбоната кальция и витамина D3. Кальций необходим для нормального функционирования нервов, клеток, мышц и костей. При недостатке кальция в крови организм будет забирать кальций из костей, что приведет к их ослаблению. Витамин D3 помогает организму усваивать кальций и фосфор и способствует здоровью костей.
				</article>
			</div>

			<div class="modal review" id="dari_modal3">
				<h3>Tata Salmon Omega 3 Fish Oil</h3>
				<div class="flex justify-center items-center">
					<div class="products_block_img_bg">
						<div class="products_img">
							<img src="./img/dariler/tata.png" alt="">
						</div>
					</div>
				</div>
				<article>
					Капсула с рыбьим жиром Tata 1 мг лосося Омега 3 Омега 3-6-9 - это пищевая добавка, которая укрепляет здоровье сердца. В ее состав входит лососевый жир, богатый источник омега-3 жирных кислот, таких как DHA и EPA, которые поддерживают общее питание. Омега-3 жирные кислоты могут подавлять воспалительную реакцию вашего организма и могут помочь справиться с симптомами, связанными с определенными воспалительными состояниями.
				</article>
			</div>


			<div class="modal review" id="review_modal">
				<h3>Клара</h3>
				<div class="flex justify-center items-center">
					<iframe src="https://www.youtube.com/embed/NxgqkuH87_w?si=l_WHs6qOgWizbgI3" 
						title="YouTube video player" 
						frameborder="0" 
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
						class="w-full max-w-lg aspect-video"
					></iframe>
				</div>
				<article>
					Меня зовут Клара. Я приехала в Индию со своей дочерью, у которой в течение 1,5 лет случались внезапные приступы. После безуспешного лечения в Алматы, Астане и Самарканде мы обратились к Med Turist Deva. В Индии врачи диагностировали ее состояние всего за два дня и рекомендовали операцию. Благодаря им моя дочь сейчас здорова. Я невероятно благодарна врачам и компании Med Turist Deva.
				</article>
			</div>

			<div class="modal review" id="review_modal2">
				<h3>Зоя</h3>
				<div class="flex justify-center items-center">
					<iframe src="https://www.youtube.com/embed/KHPbuHV1yUc?si=WttUw-RcARh0qG1q" 
						title="YouTube video player" 
						rameborder="0" 
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
						class="w-full max-w-lg aspect-video"
					></iframe>
				</div>
				<article>
					Меня зовут Зоя, и я из Узбекистана. С 2014 года я лечусь с кистой яичника. Подруга порекомендовала мне компанию "Медтурист Дева", услышав об успешном лечении в Индии. С того момента, как я обратилась к ним, они позаботились обо всем. После прибытия в Индию они предоставили транспорт и организовали консультации с врачами. Врачи рекомендовали операцию, и я согласился. Сейчас я здоров и очень благодарен моему другу и Med Turist Deva за их предоставленные услуги.
				</article>
			</div>

			<div class="modal review" id="review_modal3">
				<h3>Айнур</h3>
				<div class="flex justify-center items-center">
					<iframe src="https://www.youtube.com/embed/3XO49vDWnrs?si=AgWYs0LkD31Fw1e_" 
						title="YouTube video player" 
						frameborder="0" 
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
						class="w-full max-w-lg aspect-video"v
					></iframe>
				</div>
				<article>
					Я обратилась в эту компанию для своего 3-летнего ребенка.С самого рождения у него было серьезное заболевание кожи, из-за которого он не мог стоять. Мы обратились за лечением в Индию из-за хорошего медицинского обслуживания и доступных цен. Благодаря квалифицированному уходу мой ребенок сейчас чувствует себя хорошо после лечения. Состояние его кожи улучшается, и он плачет гораздо реже, чем раньше. Мы невероятно благодарны доктору и компании Med Tourist Deva за их услуги и поддержку на протяжении всего процесса.
				</article>
			</div>

			<div class="modal review" id="review_modal4">
				<h3>Отзывы</h3>
				<div class="flex justify-center items-center">
					<iframe src="https://www.youtube.com/embed/TNUKpo9zX7Y?si=pESKVtz2tWaLlXtR" 
						title="YouTube video player" 
						frameborder="0" 
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
						class="w-full max-w-lg aspect-video"
					></iframe>
				</div>
				<article>
					Когда я пришел в MedTurist Deva, Рамазан и Райан Бей оказали мне огромную помощь. После диагностики моего состояния врачи рекомендовали пересадку печени, которая в конечном итоге спасла мне жизнь. Я чрезвычайно благодарен. Хирург, доктор Васудеван, был невероятно профессионален, спокойно все мне объяснил. Сейчас я здорова и счастлива, и я настоятельно рекомендую эту услугу всем!
				</article>
			</div>
		</div>
	</div>

	<script src="scripts/all.js"></script>
	<script src="scripts/scripts.js"></script>
</body>
</html> 
