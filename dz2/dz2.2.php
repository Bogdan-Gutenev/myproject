<?php
$content = ["header", "content", "footer"];
$menu = ["menu1","menu2","menu3","menu4","menu5"];
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Проба</title>
</head>
<body>
<?php
foreach ($content as $key =>$value){
if ($key == 0){
?>
 <table cellpadding=30% width="100%" border="5">
     <tr>
         <td align = center colspan="2"><?php echo strtoupper($value);}elseif($key == 1){?></td>
     </tr>
<?php


?>
     <tr >
         <td  width="30%" align = center><?php for ($i=0;$i<6;$i++){  echo strtoupper($menu[0]); break;} ?></td>
         <td rowspan=5 align = center><?php echo strtoupper($value);}elseif ($key == 2){?></td>
     </tr>

     <tr>
        <td align = center><?php for ($i=0;$i<6;$i++){ echo strtoupper($menu[1]); break;} ?></td>
     </tr>

     <tr>
        <td align = center><?php for ($i=0;$i<6;$i++){ echo strtoupper($menu[2]); break;} ?></td>
     </tr>

     <tr>
        <td align = center><?php for ($i=0;$i<6;$i++){ echo strtoupper($menu[3]); break;} ?></td>
     </tr>

     <tr>
        <td align = center><?php for ($i=0;$i<6;$i++){ echo strtoupper($menu[4]); break;} ?></td>
     </tr>

     <tr>
         <td align = center colspan="2"><?php echo strtoupper($value);}?></td>
     </tr>
        <?php }?>

 </table>
</body>
</html>