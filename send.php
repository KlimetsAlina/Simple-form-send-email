<?php

$twit = $_POST['message'];

if (mail("alinkaklim@yandex.ru", "Сообщение с сайта", $twit, "From: someonelikeyou.iwishnothing@gmail.com \r\n"))
{ echo "сообщение успешно отправлено"; }
    else { echo "что-то пошло не так..."; }

?>
