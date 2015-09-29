<h1>Конструкция if-else</h1>
<h3>Задача 1</h3>
<?php
// проверить соответствие с переменной $a
$a = 1;
if($a == 0) {
    echo "Верно";
}else{
    echo "Неверно";
    }
?>

<h3>Задача 2</h3>
<?php
//$a>0
$a = 0;
if($a>0){
    echo "Верно";
}else{
    echo "Неверно";
}
?>

<h3>Задача 3</h3>
<?php
//$a>0
$a = -3;
if($a<0){
    echo "Верно";
}else{
    echo "Неверно";
}
?>
<h3>Задача 4</h3>
<?php
$a = 0;
if($a>=0){
    echo "Верно";
}else{
    echo "Неверно";
}
?>

<h3>Задача 5</h3>
<?php
$a = -3;
if($a<=0){
    echo "Верно";
}else{
    echo "Неверно";
}
?>

<h3>Задача 6</h3>
<?php
$a = 1;
if($a!=0){
    echo "Верно";
}else{
    echo "Неверно";
}
?>
<h3>Задача 7</h3>
<?php
$a = 0;
if($a == "test"){
    echo "Верно";
}else{
    echo "Неверно";
}
?>

<h3>Задача 8</h3>
<?php
$a = 1;
if($a === 1){
    echo "Верно";
}else{
    echo "Неверно";
}
?>

<h1>Работа с empty и isset</h1>
<h3>Задача 9</h3>
<?php
$a = null;
if(empty($a)){
    echo "Верно";
}else{
    echo "Неверно";
}
?>
<h3>Задача 10</h3>
<?php
$a = 1;
if(!empty($a)){
    echo "Верно";
}else{
    echo "Неверно";
}
?>

<h3>Задача 11</h3>
<?php
$a = 1;
if(isset($a)){
    echo "Верно";
}else{
    echo "Неверно";
}
?>
<h3>Задача 12</h3>
<?php
$a = 1;
if(!isset($a)){
    echo "Верно";
}else{
    echo "Неверно";
}
?>


<h1>Работа с логическими переменными</h1>
<h3>Задача 13</h3>
<?php
$var = 1;
if($var == true){
    echo "верно";
}else{
    echo "Неверно";
}
?>



<h3>Задача 14</h3>
<?php
$var = 0;
if($var != true){
    echo "верно";
}else{
    echo "Неверно";
}
?>



<h3>Задача 15</h3>
<?php
$a = 6;
if($a>0 && $a<5){
    echo "Верно";
}else{
    echo "Ошибка";
}
?>


<h3>Задача 16</h3>
<?php
$a = 2;
if($a == 0 || $a == 2){
    $b =$a / 10;
    echo $b;
}else{
    $b = $a+7;
    echo $b;
}
?>


<h3>Задача 17</h3>
<?php
$a = 4;
if($a!=1 || $a !=3){
    echo "Верно";
}else{
    echo "Ошибка";
}
?>

<h3>Задача 18</h3>
<?php
$a = 3;
$b = 1;
if($a<= 1 && $b>=3){
        echo $a + $b;
    }else{
        echo "Неверно";
    }
?>

<h3>Задача 19</h3>
<?php

$a =3;
if($a>0 && $a<5){
    echo $a +1;
}else{
    $b = $a + 5;
    echo $b;
}
?>

<h3>Задача 20</h3>
<?php
$a = 23;
if(($a>2 && $a<11) || ($b>=6 && $b<14)){
    echo $a * 2;
}else{
    echo $a +5;
}
?>

<h3>Задача 21</h3>
<?php
//
$lang = "ua";
if($lang == "en"){
    $arr = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    print_r($arr);
}elseif($lang == "ua"){
    $arr =['Понедельник', 'Вторник','Среда','Четверг','Пятница','Суббота','Воскреенье'];
    print_r($arr);
}else{
    echo "Введите \"en\" или \"ua\"!";
}
?>

<h3>Задача 22<h3>
        <?php
        $month = 6;
        switch ($month){
            case 1:
                echo "Январь";
                break;
            case 2:
                echo "Февраль";
                break;
            case 3:
                echo"Март";
                break;
            case 4:
                echo"Апрель";
                break;
            case 5:
                echo "Май";
                break;
            case 6:
                echo "Июнь";
                break;
            case 7:
                echo "Июль";
                break;
            case 8:
                echo "Август";
                break;
            case 9:
                echo "Сентябрь";
                break;
            case 10:
                echo "Октябрь";
                break;
            case 11:
                echo "Ноябоь";
                break;
            case 12:
                echo "Декабрь";
                break;
            default:
                echo "Введите число от 1 до 12.";
        }
        ?>
        <h3>Задача 23<h3>
                <?php
                // декады Сентября.
                $tenDay = 25;
                switch($tenDay){
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                    case 10:
                        echo "Вы попали в первую декаду месяца";
                        break;
                    case 11:
                    case 12:
                    case 13:
                    case 14:
                    case 15:
                    case 16:
                    case 17:
                    case 18:
                    case 19:
                    case 20:
                        echo "Вы попали во вторую декаду месяца";
                        break;
                    case 21:
                    case 22:
                    case 23:
                    case 24:
                    case 25:
                    case 26:
                    case 27:
                    case 28:
                    case 29:
                    case 30:
                        echo "Вы попали в третью декаду месяца";
                        break;
                    case 31:
                        echo "В сентябре 30 дней\)";
                    default:
                        echo "Введите число от 1 до 30";

                }
                ?>
                <h3>Задача 24<h3>
                        <?php
                        $month = 45;
                        switch ($month){
                            case 1:
                            case 2:
                                echo "Зима";
                                break;
                            case 3:
                            case 4:
                            case 5:
                                echo"Весна";
                                break;
                            case 6:
                            case 7:
                            case 8:
                                echo "Лето";
                                break;
                            case 9:
                            case 10:
                            case 11:
                                echo "Осень";
                                break;
                            case 12:
                                echo "Зима";
                                break;
                            default:
                                echo "Введите число от 1 до 12";
                        }

                        ?>
