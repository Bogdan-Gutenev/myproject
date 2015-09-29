<?php

print strftime('%d-%m-%Y, %A');

?>
<h1>Основы языка</h1>
<hr />
<h3>Задача 1</h3>
<?php
//Создайте переменную а и присвоить й значение 3. Вывести значение переменной.
 $a = 3;
echo $a . "<br />";
print $a . "  -  " . "Альтернативный ввод";
?>

<hr />
<h3>Задача 2</h3>
<?php
// Две переменных а = 10, b = 2. посчитать сумму, разность, произведение и частное
$a = 10;
$b = 2;

$sum  = $a + $b; //сумма
echo "Сумма - " . $sum . "<br />";
$diff = $a - $b; //разность
echo "Разность - " . $diff . "<br />";
$comp = $a * $b; //умножение
echo "Умножние - " . $comp. "<br />";
$divi = $a / $b; //деление
echo "Деление - " . $divi. "<br />";
?>

<hr />
<h3>Задача 3</h3>
<?php
// создать переменные. Просумировать их. Результат присвоить новой переменной и вывести его.
$c = 15;
$d = 2;
$sum = $c + $d;
$result = $sum;
echo "Переменная \$result = " . $result;
?>

<hr />
<h3>Задача 4</h3>
<?php
//создать три переменных и вывести их сумму
$a = 10;
$b = 2;
$c = 5;
$sum = $a + $b + $c;
echo "Сумма чисел = " . $sum;
?>

<hr />
<h3>Задача 5</h3>
<?php
// создать две переменные, отнять одну от другой. создать новую переменную и вывести их сумму на экран.
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$sum = $a + $b + $c + $d;
echo "Сумма чисел = " . $sum;
?>

<hr />
<h3>Задача 6</h3>
<?php
// Создать переменную и присвоить ей текст
$text = "ПРивет, Мир!";
echo $text;
?>

<hr />
<h3>Задача 7</h3>
<?php
// создать две текстовые переменные. и вывести их в одну строку
$text1 = 'ПРивет,';
$text2 = 'Мир!';
echo $text1 . $text2;
?>

<hr />
<h3>Задача 8</h3>
<?php
//Мама мыла раму
$text = "Мама мыла раму!";
$var = substr($text,11,2);
$var1 = substr($text,4,2);
$var2 = substr($text,2,2);
$var3 = substr($text,-3,2);
$var4 = substr($text,-1,2);
echo $var . ", " . $var1 . ", " . $var2 . ", " . $var3 . ", " . $var4;
?>

<hr />
<h3>Задача 9</h3>
<?php
// Из слова "путешественник" составить свои слова.
$game = "Путешественник";
$var = substr($game,0,6);//Пут
$var1 = substr($game,-6,6); //ник
echo "Первое слово - " . $var . $var1 . "<br />";// Путник
$a = substr($game,8,8);
echo "Второе слово - " . $a . "<br />"; //Шест
$b = substr($game,-12,6);
$b1 = substr($game,-4);
echo "Третье слово - " . $b . $b1; // Веник
?>

<hr />
<h3>Задача 10</h3>
<?php
// Возвести в степень
$a = 3;
$b = 2;
$c = $a ** $b;
echo "Число $a возводим в степень $b = $c." . "<br />";
// Вариант 2.
echo "Вариант 2" . "<br />";
$a1 = 5;
$b1 = 3;
$c1 = pow($a1,$b1);
echo "Число $a1 возводим в степень $b1 = $c1.";
?>

<h1>Присваивание</h1>
<hr />
<h3>Задача 1</h3>
<?php
// использовать только Var
$var = 3;
$var = $var + 5;
$var = $var * 10;
echo "Комбинаций с Var = " . $var;
?>

<h1>Работа с масивами</h1>
<hr />
<h3>Задача 1</h3>
<?php
// вывести массив
$arr = ["joomla", "wordpress","netcat"];
var_dump($arr);
?>
<hr />
<h3>Задача 2</h3>
<?php
//вывести каждый элемент массива
$arr = ["joomla", "wordpress","netcat"];
$a = ucfirst($arr[0]); // как в кирилице можно сделать первую букву заглавной?
$b = ucfirst($arr[1]);
$c = ucfirst($arr[2]);
print_r($a);
echo '<br />'; // Как поставить переход на другую строку прииспользовании print_r?
print_r($b);
echo '<br />';
print_r($c);
?>
<hr />
<h3>Задача 3</h3>
<?php
// массив вывести на экран в строку
$arr = ["html", "css","php"];
$a = $arr[0];
$b = $arr[1];
$c = $arr[2];
echo $c . "," . $a . "," . $b;
?>

<hr />
<h3>Задача 4</h3>
<?php
//Перемножить элементы масива.
$arr = [2,5,3,9];
$a = $arr[0];
$b = $arr[1];
$c = $arr[2];
$d = $arr[3];
$sum1 = $a * $b;
$sum2 = $c * $d;
$res = $sum1 + $sum2;
echo "Произведение и сумма элементов = " . $res;
?>

<hr />
<h3>Задача 5</h3>
<?php
// Создать масив двумя способами
//Вариант 1.
$arr = [];
$arr[0] = "a";
$arr[1] = "b";
$arr[2] = "c";
$arr[3] = 78;
print_r($arr);
echo "<br />";
//Вариант 2.
$arr1 = array();
$arr1[] = "a";
$arr1[] = "b";
$arr1[] = "c";
$arr1[] = 78;
var_dump($arr1);
?>

<hr />
<h3>Задача 6</h3>
<?php
//Вывести Я учу PHP!
$array = ["Я","учу","PHP","!"];
Print $array[0] . " " . $array[1] . " " . $array[2] . $array[3];
?>

<h3>Задача 7.1<h3>
        <?php
        $arr=array('a','b','c','d','e');
        $var=$arr[1];
        $arr[1]=$arr[2];
        $arr[2]=$var;
        print_r ($arr);
        ?>
        <h3>Задача 8.1<h3>
                <?php
                $arr=array('a','b','c','d','e');
                $var = $arr[4];
                $arr[4] = $arr[0];
                $arr[0] = $var;

                $var = $arr[3];
                $arr[3] = $arr[1];
                $arr[1] = $var;


                print_r($arr);
                ?>


                <h3>Задача 7.2<h3>
                        <?php
                        $arr=array('a','b','c','d','e');
                        list ($arr[0],$arr[1],$arr[2],$arr[3],$arr[4]) = array($arr[0],$arr[2],$arr[1],$arr[3],$arr[4]);
                        print_r($arr);

                        ?>

                        <h3>Задача 8.2<h3>
                                <?php
                                $arr=array('a','b','c','d','e');
                                list ($arr[0],$arr[1],$arr[2],$arr[3],$arr[4]) = array($arr[4],$arr[3],$arr[2],$arr[1],$arr[0]);
                                print_r($arr);

                                ?>





<hr />
<h3>Задача 8.3</h3>
<?php
//вывести масив в обратном порядке.
$arr = ["a","b","c","d","e"];
echo "Было:". "<br />";
print_r($arr);
echo "<br />";
$var = array_reverse($arr);
echo "Стало:" . "<br />";
print_r($var);
?>

<h1>Ассоциатывный массив</h1>
<hr />
<h3>Задача 9</h3>
<?php
$arr = ["text" => "text", "1"=> 128,"key"=>"element"];
var_dump($arr);
?>
<hr />
<h3>Задача 10</h3>
<?php
// Вывести зарплату двух ребят
$arr = ["Коля" => "1000\$","Петя" => "500\$", "Никита" => "300\$"];
next($arr);
$key = key($arr);
$cur = current($arr);
echo $key . " " . $cur . "<br />"; //Петя 500$
next($arr);
$key = key($arr);
$cur = current($arr);
echo $key . " " . $cur;// Никита 300$
?>

<hr />
<h3>Задача 11</h3>
<?php
$arr = ["I"=>"Я","study"=>"учу","php"=>"php", "sign"=>"!"];

$a = current($arr);// Я
next($arr);
$b = current($arr);//Учу
next($arr);
$c = current($arr);//PHP
$c1 = strtoupper($c);// я просто в массив написал все с маленьких букв, а в задаче написано с большлй. Вот я решил найти решение как написать с Большой
next($arr);
$d = current($arr);//!
echo $a . " " . $b . " " . $c1 . " " . $d;
?>

<hr />
<h1>Многомерные масивы</h1>
<h3>Задача 12</h3>
<?php
$arr = [
    'cms'=>["joomla", "wordpress","drupal"],
    'colors'=> ["blue"=>"голубой", "red" => "красный", "green" =>"зеленый"]
       ];

$a = $arr['cms'][0];
$b = $arr['cms'][2];
$c = $arr['colors']['green'];
$d = $arr['colors']['red'];
echo "'$a'," . "'$b'," . "'$c'," . "'$d',";
?>

<h3>Задача 13</h3>
<?php
$arr = [
    'ru'=>['Понедельник', 'Вторник','Среда','Четверг','Пятница','Суббота','Воскреенье'],
    'en'=>['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
];
print_r($arr);
?>

<h1>Работа с типами переменных</h1>
<h3>Задача 14</h3>
<?php
$var = ["joomla", "wordpress","drupal"];
echo (gettype($var));
echo "<br />";
$var = 'привет!';
echo (gettype($var));
echo "<br />";
$var = 23;
echo (gettype($var));
echo "<br />";
$var = '23';
echo (gettype($var));
echo "<br />";
$var = true;
echo (gettype($var));
echo "<br />";
$var = 'true';
echo (gettype($var));
echo "<br />";
$var = 2.5;
echo (gettype($var));
echo "<br />";
$var = null;
echo (gettype($var));


















