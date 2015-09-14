<?php
/**
 * У з н а й т е   к а к о й   д е н ь   н е д е л и   б ы л   1 0 0   д н е й   н а з а д
 */
$day = date('d');
$year = date('Y');
$mount = date("m");
$today = date('Y.m.d', mktime(0, 0, 0, $mount, $day, $year));
echo $today . "<br />";
$date = date(
    'Y.m.d', strtotime($today . "+100 day")
);// выводит 1970.01.01, а в восьмом задании так работает. ОШИБКУ НЕ НАШЕЛ.
echo $date;