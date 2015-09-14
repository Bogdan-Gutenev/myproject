<?php
/* С д е л а й т е   ф о р м у ,   с о з д а й т е   п о л е   в в о д а ,   в   к о т о р о е   н е о б х о д и м о
в в о д и т ь   д а т у   в   ф о р м а т е :   ' 3 1 . 1 2 . 2 0 1 3 ' .   С   п о м о щ ь ю   ф у н к ц и й
e x p l o d e   и   m k t i m e   п е р е в е д и т е   э т у   д а т у   в   ф о р м а т   t i m e s t a m p .
У з н а й т е   д е н ь   н е д е л и   ( с л о в о м )   з а   в в е д е н н у ю   д а т у
 */
?>

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Задача 1</title>
</head>
<body>
<form method="POST" action="dz4.2.php">
    <label>Введите год в формате dd.mm.YY:</label>
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
$ex = explode(".", $text);
$date = date('l', mktime(0, 0, 0, $ex[1], $ex[0], $ex[2]));
echo "<br />" . $date;


?>

