<?php
/**
 * Н а й д и т е   к о л и ч е с т в о   д н е й ,   ч а с о в ,   м и н у т ,
 * с е к у н д ,   п р о ш е д ш и х   с 5 : 4 9 : 5 9   1 ­ г о   ч и с л а
 *   т е к у щ е г о   м е с я ц а   д о   н а с т о я щ е г о   м о м е н т а .
 */
$today = date('m');// дата
$year = date('Y');//год
$date1 = mktime(5, 49, 59, $today, 1, $year);//секунды с 1 дня тек.мес
$date2 = time();
$date = $date2 - $date1;
echo $date;// секунду
$minute = $date / 60; // минуты
echo $minute . "<br />";
$hour = $minute / 60; // час
echo $hour . "<br />";
$day = $hour / 24; // дни
echo $day . "<br />";