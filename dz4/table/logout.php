<?php
//if((isset($_COOKIE['coo_name'])) && (isset($_COOKIE['coo_email']))){
$conclusion
    = '<form method="post"> Привет,' . $_COOKIE['coo_name'] . 'Дата авторизации'
    . $_COOKIE['coo_email']
    . '<input type="submit" name="logout" value="Выйти">' . '</form>';
echo $conclusion;
//}
if (isset($_POST['logout'])){
    setcookie("id");
    setcookie("em");
    setcookie("date");
    header("Location: index.php"); exit();
};