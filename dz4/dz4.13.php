</head>
<body>
<form method="post" action="dz4.13.php">
    <label>Введите дату в формате YY-mm-dd:</label>
    <input type="text" name="text">
    <br/><br/>

    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
<hr>
<?php
/*( ​ + 1 ​ )   С о з д а й т е   ф о р м у   с   п о л е м   в в о д а .   П о л ь з о в а т е л ь   в в о д и т   д а т у
с в о е г о   р о ж д е н и я .   С а й т   о п р е д е л я е т   е г о   з н а к   з о д и а к а .   П о д г о т о в ь т е
м н о г о м е р н ы е   м а с с и в ы   с   к р а т к и м и   ц и т а т а м и ­ г о р о с к о п а м и   ( т е к с т
л а т и н и ц е й ) .   Д л я   к а ж д о г о   з н а к а   з о д и а к а   з а г о т о в ь т е   п о   2 ­ 3
г о р о с к о п а .   П о с л е   о п р е д е л е н и я   з н а к а   з о д и а к а   п о л ь з о в а т е л я   с к р и п т
д о л ж е н   п о к а з ы в а т ь   ц и т а т у ­ г о р о с к о п .   Ц и т а т а   в ы б и р а е т с я   с л у ч а й н ы м
о б р а з о м .
*/

$horoscope = [
    "ram"      => [
        "In the sphere of professional activity, Aries is possible to expect success.",
        "Appreciate this attitude! In relations with partners, bosses, be extremely reticent."
    ],
    "taurus"   => [
        "Around you are many people who interact with you, invite you for a coffee, chatting ...",
        "For the people of this sign, the first half of the day, promises to bring difficulties in the professional and family relationships."
    ],
    "twins"    => [
        "It is an unfavorable day, today is Gemini.",
        "Adopted this day solutions will open up new prospects!"
    ],
    "cancer"   => [
        "Этот день принесет Ракам трудности и разного рода хлопоты.",
        "Сегодня вы будете пребывать во власти паники и неразберихи."
    ],
    "Lion"      => [
        ".Благоприятный день будет сегодня у людей этого знака.",
        "Планеты по отношению к этому знаку, будут настроены благоприятно."
    ],
    "virgin"     => [
        "время отдыха и релакса.",
        "Для Дев сегодня как никогда удачны знакомства, особенно романтические."
    ],
    "Libra"     => [
        "Твои желаниям время исполняться! ",
        "Ты сегодня будешь счастлив! "
    ],
    "Scorpio" => [
        "Наконец-то звёзды улыбнуться этому знаку зодиака.",
        "Благоприятный день. "
    ],
    "Sagittarius"  => [
        "Наконец-то звёзды улыбнуться этому знаку зодиака.",
        "В этот день будьте внимательны к детям. Ваша забота им необходима."
    ],
    "Capricorn"  => [
        "Проблемы личного плана целиком и полностью лягут на ваши плечи",
        "Людям этого знака, сегодня придётся решать бытовые проблемы, которые накопился в последнее время."
    ],
    "Aquarius" => [
        "This day promises to bring the negative trends. ",
        "People of this sign, now awaits the realization of their dreams. "
    ],
    "Fish"     => [
        "Сегодня вы будете пребывать во власти паники и неразберихи.",
        "Есть люди в душе которых живёт солнце. "
    ]
];
//var_dump($horoscope);
/*( ​ + 1 ​ )   С о з д а й т е   ф о р м у   с   п о л е м   в в о д а .   П о л ь з о в а т е л ь   в в о д и т   д а т у
с в о е г о   р о ж д е н и я .   С а й т   о п р е д е л я е т   е г о   з н а к   з о д и а к а .   П о д г о т о в ь т е
м н о г о м е р н ы е   м а с с и в ы   с   к р а т к и м и   ц и т а т а м и ­ г о р о с к о п а м и   ( т е к с т
л а т и н и ц е й ) .   Д л я   к а ж д о г о   з н а к а   з о д и а к а   з а г о т о в ь т е   п о   2 ­ 3
г о р о с к о п а .   П о с л е   о п р е д е л е н и я   з н а к а   з о д и а к а   п о л ь з о в а т е л я   с к р и п т
д о л ж е н   п о к а з ы в а т ь   ц и т а т у ­ г о р о с к о п .   Ц и т а т а   в ы б и р а е т с я   с л у ч а й н ы м
о б р а з о м .
*/
//YY-mm-dd
if (empty($_POST['text'])) {
    echo "Введите дату";
} else {
    $data = $_POST['text'];
    // echo $data . "<br />";
    $ex = explode("-", $data);
    //print_r($ex);
    $date1 = date('Y-m-d', mktime(0, 0, 0, 1, 20, $ex[0]));
    $date2 = date('Y-m-d', mktime(0, 0, 0, 2, 18, $ex[0]));

    if (($data >= $date1) && ($data <= $date2)) {
        $a =$horoscope[array_rand($horoscope)];

        echo "Водолей". $horoscope['ram'][$a];
    } elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 2, 21, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 3, 20, $ex[0])))
    ) {
        echo "Рыба";
    } elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 3, 21, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 4, 20, $ex[0])))
    ) {
        echo "Овен";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 4, 21, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 5, 20, $ex[0])))
    ) {
        echo "Телец";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 5, 21, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 6, 21, $ex[0])))
    ) {
        echo "Близнецы";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 6, 22, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 7, 22, $ex[0])))
    ) {
        echo "Рак";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 7, 23, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 8, 23, $ex[0])))
    ) {
        echo "Лев";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 8, 24, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 9, 23, $ex[0])))
    ) {
        echo "Дева";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 9, 24, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 10, 23, $ex[0])))
    ) {
        echo "Весы";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 10, 24, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 11, 22, $ex[0])))
    ) {
        echo "Скорпион";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 11, 23, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 12, 21, $ex[0])))
    ) {
        echo "Стрелец";
    }elseif (($data >= date('Y-m-d', mktime(0, 0, 0, 12, 22, $ex[0])))
        && ($data <= date('Y-m-d', mktime(0, 0, 0, 01, 20, $ex[0])))
    ) {
        echo "Козерог";
    }
}










