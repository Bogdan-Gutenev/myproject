<?php
/*С о з д а й т е   ф о р м у ,   с д е л а й т е   п о л е   в в о д а ,   в   к о т о р о е   п о л ь з о в а т е л ь
в в о д и т   г о д   ( 4   ц и ф р ы ) ,   а   с к р и п т   о п р е д е л я е т   в и с о к о с н ы й   л и   г о д .

 */ ?>
    <!Doctype html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        <title>Задача 1</title>
    </head>
    <body>
    <form method="POST" action="dz4.1.php">
        <label>Введите год:</label>
        <input type="text" name="text">
        <br/><br/>
        <input type="submit" name="submit" value="Отправить">
    </form>
    </body>
    </html>
<?php
$text = (int)trim(strip_tags($_POST['text']));
$sub = $_POST['submit'];
echo "Вы ввели: " . $text . "<br />";

if (isset($sub)) {
    $date = date('L', mktime(0, 0, 0, 7, 7, $text));
    if ($date == 1) {
        echo "Высокосный";
    } else {
        echo "Не высокосны";
    }
}

?>