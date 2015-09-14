<?php
/**
 * У з н а й т е   с к о л ь к о   д н е й   о с т а л о с ь   д о   Н о в о г о   Г о д а .
 */
$day = date('d');//
$year = date('Y');//
$mount = date('m');
$today = mktime(0, 0, 0, $mount, $day, $year);
$new_year = mktime(0, 0, 0, 12, 31, 2015);
$prom = ($new_year - $today);
$res = $prom / 60 / 60 / 24;
echo "Дней до нового года - " . round($res);
