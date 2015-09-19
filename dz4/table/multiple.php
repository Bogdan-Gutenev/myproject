<heat>
    <body>
    <form method="POST">
        <label>Кол - во строк - </label>
        <input type="text" name="text1">
        <br><br>
        <label>Кол-во столбцов - </label>
        <input type="text" name="text2">
        <br><br>
        <label>Цвет таблицы - </label>
        <input type="text" name="text3">
        <br><br>
        <input type="submit" value="Отправить">
    </form>
    </body>
</heat>

<?php
if ((empty($_POST['text1'])) && (empty($_POST['text2']))){
    echo "Заполните поля!!!";
}else{
$text1 = (int) $_POST['text1'];
$text2 = (int) $_POST['text2'];
$text3 =  $_POST['text3'];
$col = "color:" . $text3;
echo $col;
    //
?>
<table  border="2">
    <?php
    for ($i = 1; $i <= $text1; $i++) {
        ?>
        <tr align="center">
            <?php
            for ($j = 1; $j <= $text2; $j++) {
                ?>
                <td style="<?php echo $col;?> "><?php echo ($i * $j); ?></td>
            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>
</table>
    <?php } ?>