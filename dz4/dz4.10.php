<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Задача 1</title>
</head>
<body>
<form method="GET" action="dz4.10.php">
    <label>Введите год в формате YY - </label>
    <input type="text" name="text">
    <br/><br/>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
<?php
/**
 * Д а н   G E T ­ п а р а м е т р   d a t e ,   в   к о т о р ы й   в в о д и т с я   г о д   в   ф о р м а т е
 * ' 2 0 1 3 ' .   П о с ч и т а й т е   с к о л ь к о   в о с к р е с е н и й   в   э т о м   г о д у   п р и х о д и т с я
 * н а   п е р в о е   ч и с л о   м е с я ц а .
 */
/*
$count =0;
$text = $_GET['text'];
if (empty($text)) {
    echo "Введите дату";
}else{
    $day = date('z', mktime(0, 0, 0, 12, 31, $text));// кол-во дней дня цикла.

    for ($i = 1; $i <= $day; $i++) {
        $count = 0;
        $sun = date('l', mktime(0, 0, 0, 1, $i, $text)); //день недели
        $number = date('j', mktime(0, 0, 0, 1, $i, $text));// день месяца в формате 1-31
        //echo "\$i = ". $i. "<br />";//проверял
        //echo "\$sun = ". $sun. "<br />";//проверял
       // echo "\$number = ".$number. "<br />";//проверял

        if ($sun == "Sunday" && $number == 1) {
            $count++;
        }

    }
    echo $count;
}
*/
/**
 * Д а н   G E T ­ п а р а м е т р   d a t e ,   в   к о т о р ы й   в в о д и т с я   г о д   в   ф о р м а т е
 * ' 2 0 1 3 ' .   П о с ч и т а й т е   с к о л ь к о   в о с к р е с е н и й   в   э т о м   г о д у   п р и х о д и т с я
 * н а   п е р в о е   ч и с л о   м е с я ц а .
 */

if (empty ($_GET['text'])) {
    echo "Введите данные";
} else {
    $count = 0;
    $text = $_GET['text'];
    echo "Вы ввели - " . $text . "<br />";
    for ($i = 1; $i <= 12; $i++) {
        for ($j = 1; $j <= 31; $j++) {
            $sunday = date('l', mktime(0, 0, 0, $i, $j, $text));
            // echo $sunday . "<br />";
            if ($sunday == "Sunday" && $j ==1) {
                $count++;
            }
        }
    }
    echo $count;
}
?>



