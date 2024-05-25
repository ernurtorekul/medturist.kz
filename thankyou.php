<?php 
include "libmail.php";
if (session_status() == PHP_SESSION_NONE) {
  session_start();
} ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Deva Medical Tours</title> 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<style>
/* 	.top_screen {
		padding-bottom: 302px;
	} */
</style>
<header>
	<div class="top_header">
		<div class="inside">
			<section>
				<a href="#" class="logo"><img src="img/logo.png" alt=""></a>
				<div class="desc">
					Доступная медицина мирового класса<i></i>
					Медицинский туризм в Индию 
				</div>
				<div class="right">
					<div class="tel_block">
						<a href="tel:+77082926307" class="tel">+7 (708) <span>292-63-07</span></a>
						<p>Перезвонить вам?</p>
					</div>
					<a href="http://medturist.kz/" class="modal_open" data-target="звонок с шапки">Вернутся на сайт</a>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</section>
		</div>
	</div>
	</header>

<div class="top_screen">
	<section>
		<h1>Заявка оптравлена</h1>
		<p>Наш специалист свяжется с Вами в ближайшее время!</p>
		<a href="http://medturist.kz/" class="modal_open wow bounceIn" data-target="в 3-5 раз дешевле на первом экране">Вернутся на сайт</a>

		<ul>
			<li>Клиники и врачи <i></i>с аккредитацией</li>
			<li>Лечение <i></i>без ожидания</li>
			<li>Полное сопровождение <i></i>от выезда до возвращения</li>
		</ul>
	</section>
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

<script src="scripts/all.js"></script>
<!-- Google Code for Adwords &#1082;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 857687156;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "TT_DCM-4kXAQ9Ij9mAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/857687156/?label=TT_DCM-4kXAQ9Ij9mAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

 <?php
  #Здесь будет происходить добавление контакта
  $utm ='';
  $utm = '<b>Рекламная система: </b><br>'.$utm;
  if($_SESSION['utm_source']!='')$utm .= '<b>Рекламная система (utm_source): </b> '.$_SESSION['utm_source'].' <br>';
  if($_SESSION['utm_medium']!='')$utm .= '<b>Тип трафика (utm_medium): </b> '.$_SESSION['utm_medium'].' <br>';
  if($_SESSION['utm_campaign']!='')$utm .= '<b>Кампания (utm_campaign): </b> '.$_SESSION['utm_campaign'].' <br>';
  if($_SESSION['utm_term']!='')$utm .= '<b>Ключевая фраза (utm_term): </b> '.$_SESSION['utm_term'].' <br>';
  if($_SESSION['utm_content']!='')$utm .= '<b>Содержание объявления (utm_content): </b> '.$_SESSION['utm_content'].' <br>';
  $cl_name    = isset($_GET['name'])?htmlspecialchars($_GET['name']):'';
  $cl_phone   = isset($_GET['phone'])?htmlspecialchars($_GET['phone']):'';
  $cl_quastion = isset($_GET['quastion'])?htmlspecialchars($_GET['quastion']):'';
if ( ($cl_name == '') || ($cl_phone == '') ) { die('empty'); }
  $formsended = isset($_GET['formsended'])?htmlspecialchars($_GET['formsended']):'';
  $referer    = isset($_GET['referer'])?htmlspecialchars($_GET['referer']):'';

  

  if( $cl_quastion ) {

    $message = '
    <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Отправка заявки</title>
    </head>
    <body>
      <p>Имя: '.$cl_name.'</p>
      <p>Телефон:'.$cl_phone.'</p>
      <p>Вопрос:'.$cl_quastion.'</p>
      <p>Отправлено с формы: '.$formsended.'</p>
      <p>Реферер:'.$referer.'</p>
      <br>
      <br/>'.$_SESSION[seo_path].' <br/>UTM:'.$utm.'
    </body>
    </html>
    ';


  }
  else {

    $message = '
    <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Отправка заявки</title>
    </head>
    <body>
      <p>Имя: '.$cl_name.'</p>
      <p>Телефон:'.$cl_phone.'</p>
      <p>Отправлено с формы: '.$formsended.'</p>
      <p>Реферер:'.$referer.'</p>
      <br>
      <br/>'.$_SESSION[seo_path].' <br/>UTM:'.$utm.'
    </body>
    </html>
    ';


  }


  //die();



  $m= new Mail; 
  $m->From( "info@medturist.kz" );
  // $m->To( "bidavvv@gmail.com" );
  $m->To( "info@medturist.kz" );
  $m->Subject( "Заявка с сайта medturist.kz");
  $m->Body( $message, "html" );
  $m->Priority(3);
  $m->smtp_on( "medturist.kz", "info@medturist.kz", "medturistSR2019");
  $m->Send();

 //echo ($m->Get());

 //echo $utm;
 
if (1==1) { ?>


  <? } else { ?>
  <? } ?>
</body>
</html>


<?php
  error_reporting();
  $root=__DIR__.DIRECTORY_SEPARATOR.'api/';
  require $root.'prepare.php'; 
  require $root.'auth.php'; 
  require $root.'account_current.php';
  require $root.'fields_info.php'; 
  require $root.'contacts_list.php'; 
  require $root.'lead_add.php';
  require $root.'contact_add.php'; 
?>
