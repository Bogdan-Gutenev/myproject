<?php
/**
 * С д е л а й т е   ф о р м у ,   к о т о р а я   с п р а ш и в а е т   д а т у ­ в р е м я   в   ф о р м а т е
 * ' 2 0 1 3 ­ 1 2 ­ 3 1 T 1 2 : 1 3 : 5 9 ' .   С   п о м о щ ь ю   ф у н к ц и и   s t r t o t i m e
 * п р е о б р а з у й т е   е е   в   ф о р м а т   ' 1 2 : 1 3 : 5 9   3 1 . 1 2 . 2 0 1 3
 */
?>
    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        <title>Задача 1</title>
    </head>
    <body>
    <form method="POST" action="dz4.6.php">
        <label>Введите год в формате YY.mm.dd T h:i:s - </label>
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
    $sub1 = substr($text, 0, 10);
    $ex1 = explode(".", $sub1);//год
    $sub2 = substr($text, -8, 8);
    $ex2 = explode(".", $sub2);//дата 1 2 : 1 3 : 5 9   3 1 . 1 2 . 2 0 1 3
    $date = date(
        'h:s:i \T d.m.Y',
        mktime($ex2[0], $ex2[1], $ex2[2], $ex1[1], $ex1[2], $ex1[0])
    );
    echo "<br />" . $date;
}
?>