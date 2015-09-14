<?php
/*
 * С д е л а й т е   ф о р м у ,   к о т о р а я   с п р а ш и в а е т   д в е   д а т ы   в   ф о р м а т е
' 2 0 1 3 ­ 1 2 ­ 3 1 ' .   П е р в у ю   д а т у   з а п и ш и т е   в   п е р е м е н н у ю   $ d a t e 1 ,   а
в т о р у ю   в   $ d a t e 2 .   С р а в н и т е ,   к а к а я   и з   в в е д е н н ы х   д а т   б о л ь ш е .
В ы в е д и т е   е е   н а   э к р а н
 */
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
?>
<hr>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Задача 1</title>
</head>
<body>
<form method="POST" action="dz4.5.php">
    <label>Введите 1-ю дату в формате YY-mm-dd:</label>
    <input type="text" name="text1">
    <br/><br/>
    <label>Введите 2-ю дату в формате YY-mm-dd:</label>
    <input type="text" name="text2">
    <br/><br/>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
<hr>
<?php
if (empty($text1) && empty($text2)) {
    echo "Введите дату";
} else {
    echo "Результат: ";
}
if ($text1 > $text2) {
    echo "Первая дата больше второй, а именно - " . $text1;
} else {
    echo "Втора дата больше первой, а именно - " . $text2;
}

?>