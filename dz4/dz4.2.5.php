<?php
/**
 * Р а с с ч и т а й т е   д а т у   п а с х и   в   з а д а н н о м   г о д у .
 А л г о р и т м   е е   р а с ч е т а н а й д и т е   в   п о и с к о в ы х   с и с т е м а х .
 */
$date = 2015;
$easter = easter_days($date);
//echo $easter . "<br />";

$date = date ('Y.m.d', mktime(0,0,0,03,21,$date));
//echo $date . "<br />";
$a = date('Y.m.d', strtotime($date. "+$easter day"));
echo $a;//выводит 1970.01.01, ОШИБКУ НЕ НАШЕЛ.