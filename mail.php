<?php
    require_once("db.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $recepient = "dslamkul14@gmail.com";
    $sitename = "Daryn.kz";
    $pagetitle = "Daryn - new request \"$sitename\"";
    $message = "Request from " . $name . " (" . $email . "):\n\n Phone number:" . $message;
                
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($name != '' && $email != '' && $message != '') { 
            if (mail($recepient, $pagetitle, $message)) { 
                echo '<p style="color:#fff;">Спасибо, '.$name.'! <br> 
                            Мы свяжемся с Вами в кратчайшее время.
                        </p>';

                
            } else { 
                echo '<p style="color:#F84B3C;">Что то пошло не так, проверьте соединение с интернетом</p>'; 
            } 

        } else {
            echo '<p style="color:#F84B3C;">Заполните все поля!</p>';
        }
                $send = R::dispense('mailed');
                $send->name = $name;
                $send->mail =  $email;
                $send->phone = $message; 
                $id = R::store($send);
    } else {
        echo '<p style="color:#F84B3C;">Неправильно введен Email.</p>';
    }  



?>