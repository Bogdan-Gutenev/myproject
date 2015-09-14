<?php
/**
 *  С д е л а й т е   ф о р м у ,   к о т о р а я   с п р а ш и в а е т   у   п о л ь з о в а т е л я   д а т у   в
 * ф о р м а т е   ' 2 0 1 3 ­ 1 2 ­ 3 1 T 1 2 : 5 9 : 5 9 ' .   С   п о м о щ ь ю   ф у н к ц и й   e x p l o d e   и
 * m k t i m e   п е р е в е д и т е   э т у   д а т у   в   ф о р м а т   t i m e s t a m p .   У з н а й т е   м е с я ц
 * ( с л о в о м )   з а   в в е д е н н у ю   д а т у .   П о д с к а з к а :   e x p l o d e   с л е д у е т
 * п р и м е н и т ь   д в а ж д ы .
 */
?>
    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        <title>Задача 1</title>
    </head>
    <body>
    <form method="POST" action="dz4.4.php">
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
    $ex2 = explode(".", $sub2);//дата
    $date = date('F', mktime($ex2[0],$ex2[1],$ex2[2],$ex1[1],$ex1[2],$ex1[0])
    );
    echo "<br />" . $date;
}

?>