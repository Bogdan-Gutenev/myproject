<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
</head>
<body>
<form method="GET" action="dz4.12.php">
    <label>Введите год в формате YY - </label>
    <input type="text" name="text">
    <br/><br/>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
<?php
/*Д а н   G E T ­ п а р а м е т р   d a t e ,   в   к о т о р ы й   в в о д и т с я
 г о д   в   ф о р м а т е ' 2 0 1 3 ' .   У з н а й т е ,   к а к о й
э т о   б у д е т   г о д   п о   в о с т о ч н о м у   к а л е н д а р ю .
Р е з у л ь т а т   в ы в е д и т е   н а   э к р а н .
*/

if(empty($_GET['text'])){
    echo "Введите год - ";
}else{
    $year = $_GET['text'];
    if($year >= 1900 && $year<=1911){
        $ost = $year % 1900;
    }else{
        $ost = ($year - 1900)%12;
    }
}
switch ($ost) {
    case 0:
        echo 'Год Крысы';
        break;
    case 1:
        echo 'Год Быка';
        break;
    case 2:
        echo 'Год Тигра';
        break;
    case 3:
        echo 'Год Кролика';
        break;
    case 4:
        echo 'Год Дракона';
        break;
    case 5:
        echo 'Год Змеи';
        break;
    case 6:
        echo 'Год Лошади';
        break;
    case 7:
        echo 'Год Овцы';
        break;
    case 8:
        echo 'Год Обезьяны';
        break;
    case 9:
        echo 'Год Петуха';
        break;
    case 10:
        echo 'Год Собаки';
        break;
    case 11:
        echo 'Год Свиньи';
        break;

    default:
        break;
}


?>