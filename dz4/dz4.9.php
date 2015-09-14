<?php
/**
 * П е р е д а й т е   в   а д р е с н у ю   с т р о к у   G E T ­ п а р а м е т р   d a t e ,   в   к о т о р о м   б у д е т
 * з а п и с а н а   д а т а   в   ф о р м а т е   ' 2 0 1 3 ­ 1 2 ­ 3 1 ' .   П р е о б р а з у й т е   е е   в   ф о р м а т
 * ' 3 1 . 1 2 '   ( д е н ь . м е с я ц )
 */
?>
    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        <title>Задача 1</title>
    </head>
    <body>
    <form method="GET" action="dz4.9.php">
        <label>Введите год в формате YY-mm-dd - </label>
        <input type="text" name="text">
        <br/><br/>
        <input type="submit" name="submit" value="Отправить">
    </form>
    </body>
    </html>
<?php
$text = $_GET['text'];
if (empty($text)) {
    echo "Введите дату";
} else {
    $ex = explode("-", $text);
    echo date('m.d', mktime(0, 0, 0, $ex[1], $ex[2], $ex[0]));
}