<?php 
include "libmail.php";
if (session_status() == PHP_SESSION_NONE) {
  session_start();
} ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Document</title>
</head>
<body>

  <?php
  #Здесь будет происходить добавление контакта
  $utm ='';
  $utm = '<b>Рекламная система: </b><br>'.$utm;
  if($_SESSION['utm_source']!='')$utm .= '<b>Рекламная система (utm_source): </b> '.$_SESSION['utm_source'].' <br>';
  if($_SESSION['utm_medium']!='')$utm .= '<b>Тип трафика (utm_medium): </b> '.$_SESSION['utm_medium'].' <br>';
  if($_SESSION['utm_campaign']!='')$utm .= '<b>Кампания (utm_campaign): </b> '.$_SESSION['utm_campaign'].' <br>';
  if($_SESSION['utm_term']!='')$utm .= '<b>Ключевая фраза (utm_term): </b> '.$_SESSION['utm_term'].' <br>';
  if($_SESSION['utm_content']!='')$utm .= '<b>Содержание объявления (utm_content): </b> '.$_SESSION['utm_content'].' <br>';


  $cl_name     = isset($_GET['name'])?htmlspecialchars($_GET['name']):'';
  $cl_phone    = isset($_GET['phone'])?htmlspecialchars($_GET['phone']):'';
  $cl_quastion = isset($_GET['quastion'])?htmlspecialchars($_GET['quastion']):'';
  
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
  $m->From( "lead@medturist.kz" );
  // $m->To( "bidavvv@gmail.com" );
  $m->To( "sg1144@mail.ru" );  $m->To( "intop12051@gmail.com" );
  $m->Subject( "Заявка с сайта medturist" );
  $m->Body( $message, "html" );
  $m->Priority(3);
  $m->smtp_on( "medturist.kz", "lead@medturist.kz", "med1234" );
  $m->Send();


  if (1==1) {
   ?>

   <!-- Google Code for Almaty Mall Conversion Page -->
   <script type="text/javascript">
     /* <![CDATA[ */
     var google_conversion_id = 948502566;
     var google_conversion_language = "en";
     var google_conversion_format = "3";
     var google_conversion_color = "ffffff";
     var google_conversion_label = "1Jc2CMjEtl4QpoCkxAM";
     var google_remarketing_only = false;
     /* ]]> */
   </script>
   <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
   </script>
   <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/948502566/?label=1Jc2CMjEtl4QpoCkxAM&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>


  <?
} else {
  ?>
  <script>
    window.alert("Сообщение НЕ отправлено, заполните все поля. При возникновении ошибки повторно просьба перезвонить нам лично!");
  </script>
  <? } ?>

  <script type="text/javascript">
    window.location.href = "thankyou.php"
  </script>
</body>
</html>