<!Doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Задача 1</title>
</head>
<body>
<form method="POST" action="dz4.7.php">
    <label>Введите год в формате dd.mm.YY - </label>
    <input type="text" name="text">
    <br/><br/>

    <p><b>Метод вывода на экран</b> <br/>
        <input type="checkbox" name="ck1"> dd.mm.YY <br/>
        <input type="checkbox" name="ck2"> YY.mm.dd <br/>
    </p>
    <input type="submit" name="submit" value="Отправить">

</form>
</body>
</html>
<?php
/**
 * С о з д а й т е   ф о р м у   с   э л е м е н т о м   в в о д а .   П р и   в в о д е   д а т ы   п р и б а в ь т е   к
 * д а т е   3 1 . 1 2 . 2 0 1 3   о д и н   д е н ь .   Р е з у л ь т а т   в ы в е д и т е   в   т о м   ж е
 * ф о р м а т е .
 * 7 . 1 .   ( ​ + 1 ​ )   Д о б а в ь т е   к   ф о р м е   д в а   э л е м е н т а   т и п а   r a d i o   b u t t o n
 * к о т о р ы е   б у д у т   о п р е д е л я т ь   ф о р м а т   в в о д а :   d d . m m . Y Y   и   Y Y . m m . d d .   В
 * з а в и с и м о с т и   о т   ф о р м а т а   в в о д а   д о л ж е н   б ы т ь   т а к о й   ж е   ф о р м а т
 * в ы в о д а .
 */

if (empty($_POST['text'])) {
    echo "Введите дату";
} else {
    $text = $_POST['text'];
    $ex = explode(".", $text);
   // print_r($ex);
    if (isset($_POST['ck1'])) {
        $mk = mktime(0, 0, 0, $ex[0], $ex[1], $ex[2]);
        $day = time($mk) + (1 * 24 * 60 * 60);
        echo date('d.m.Y', $day);
    } elseif (isset($_POST['ck2'])) {
        echo date('Y.m.d', mktime(0, 0, 0, $ex[2], $ex[1], $ex[0]));
    } elseif (isset($_POST['ck1']) && isset($_POST['ck2'])) {
        $date1 = date('d.m.Y', mktime(0, 0, 0, $ex[0], $ex[1], $ex[2]));
        $date2 = date('Y.m.d', mktime(0, 0, 0, $ex[0], $ex[1], $ex[0]));
        echo "Первая дата в формате dd.mm.YY - " . $date1 . "<br />" .
            "Втора дата в формате YY.mm.dd - " . $date2;
    } else {
        echo date('d.m.Y', mktime(0, 0, 0, $ex[0], $ex[1], $ex[2]));
    }
}
// Запутался.
?>