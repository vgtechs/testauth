<?php

$email = $_POST['email'];
$psw = $_POST['psw'];

$users_array = [
               ["user1@gmail.com", "psw1", "Иван"],
               ["user2@gmail.com", "psw2", "Петр"],
               ["user3@gmail.com", "psw3", "Николай"],
               ["user4@gmail.com", "psw4", "Арестарх"],
               ];

foreach ($users_array as $ua){
    if($ua[0] == $email && $ua[1] == $psw){
        session_start();
        $_SESSION['email'] = $ua[0];
        $_SESSION['name'] = $ua[2];
        http_response_code(200);
        echo '{"message": "SUCCESS"}';
        exit();
    }
}

http_response_code(403);
    exit();


