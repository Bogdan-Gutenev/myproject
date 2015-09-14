<?php
/**
 * С о з д а й т е   ф о р м у   с   э л е м е н т о м   в в о д а .   В   п о л е   в в о д и т с я   д а т а   в
 * ф о р м а т е   ' 2 0 1 3 ­ 1 2 ­ 3 1 ' .   П р и б а в ь т е   к   э т о й   д а т е   1 )   2   д н я ,   2 )   1
 * м е с я ц   и   3   д н я ,   3 )   1   г о д .   О т н и м и т е   о т   э т о й   д а т ы   3   д н я .
 * Р е з у л ь т а т   в ы в е д и т е   н а   э к р а н
 */
?>

    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        <title>Задача 1</title>
    </head>
    <body>
    <form method="POST" action="dz4.8.php">
        <label>Введите год в формате YY-mm-dd - </label>
        <input type="text" name="text">
        <br/><br/>
        <input type="submit" name="submit" value="Отправить">
    </form>
    </body>
    </html>
<?php

$text = $_POST['text'];
if (empty($text)) {
    echo "Введите дату";
} else {
    echo "Вы ввели: " . $text;
}

if (!empty($text)) {

    $date = date(
        'Y.m.d', strtotime($text . "+2 day 1 month 3 day 1 year -3 day")
    );

    echo "<br />" . $date;

}
?>