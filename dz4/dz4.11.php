<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Задача 1</title>
</head>
<body>
<form method="GET" action="dz4.11.php">
    <label>Введите год в формате YY - </label>
    <input type="text" name="text">
    <br/><br/>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
<?php
/* С д е л а й т е   ф о р м у   с   о д н и м   п о л е м   в в о д а ,
   в   к о т о р о е   п о л ь з о в а т е л ь в в о д и т   г о д .   Н а й д и т е   в с е
   п я т н и ц ы   1 3 ­ е   в   э т о м   г о д у .   Р е з у л ь т а т в ы в е д и т е
  в   в и д е   с п и с к а   д а т .
*/
if (empty ($_GET['text'])) {
    echo "Введите данные";
} else {

    $year = $_GET['text'];
    for ($i = 1; $i <= 12; $i++) {
        for ($j = 1; $j <= 31; $j++) {

            $date = date('l', mktime(0, 0, 0, $i, $j, $year));
            //$fritay = date('l', mktime(0,0,0))
            if ($date == "Friday" && $j == 13) {
                echo date('m:d:Y', mktime(0, 0, 0, $i, $j, $year)) . "<br />";
            }
        }
    }
}