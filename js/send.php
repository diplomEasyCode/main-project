<?php
   $to = "kovalyova_alena@inbox.ru";
   $subject = "Написать письмо";
   $message = '<h1>Письмо от</h1>
                <p>Ваше имя <b> '.$_POST['name'].'</b></p>
                <p>Ваш email <b> '.$_POST['email'].'</b></p>
                <p>Сообщение <b> '.$_POST['commit'].'</b></p>';
   $header = "From:abc@somedomain.com \r\n";            
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   mail($to, $subject, $message, $header);
   ?>