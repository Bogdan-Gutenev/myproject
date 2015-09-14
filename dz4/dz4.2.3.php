<?php
/**
 * Н а й д и т е   с к о л ь к о   в о с к р е с е н и й   б у д е т   в   о п р е д е л е н н о м   г о д у   $ y e a r .
 */


$count = 0;
for ($i = 1; $i <= 12; $i++) {
    for ($j = 1; $j <= 31; $j++) {
        $sunday = date('l', mktime(0, 0, 0, $i, $j, 2015));
        if ($sunday == "Sunday") {
            $c = $count++;
            echo $c. ")" .$sunday . "<br />";

        }
    }

}
echo $c + 1;// отчет с одного