<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "shavirina.1@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	


    if(mail($to, $subject, $msg, "From: $from ")){
        echo 'Лист відправлено!';
    }
    else {
        echo 'Лист НЕ відправлено!';
    }
?>
