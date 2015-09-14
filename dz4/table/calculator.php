<html>
<heat>
    <title>Калькулятор</title>

    <body style="background-color:mintcream">
    <form method="post" action="calculator.php">

        <label><h1>Введите два числа: <h1></h1></label><br/>
        <input type="text" name="text1">
        <select name="select" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            <option value="^">^</option>
        </select>
        <input type="text" name="text2">
        <br/>
        <br/>
        <input type="submit" name="sum" value="Результат =>">
        <br> <br>

</heat>
</html>
<?php
if(empty($_POST['text1']) && empty($_POST['text2'])){
    echo "Введите два числа";
}else{
    $text1 = (int) $_POST['text1'];
    $text2 = (int) $_POST['text2'];
    $s = $_POST['select'];
    //echo $text1 . "<br/>";
    //echo $text2 . "<br/>";
    //echo $select . "<br/>";
    if($s== "+"){
        $sum = $text1 + $text2;
        echo "<hr>"."<h2> Результат: </h2>"."<b>".$sum."</b>"."<hr>";
    }elseif($s == "-"){
        $raz = $text1 - $text2;
        echo "<hr>"."<h2> Результат: </h2>"."<b>".$raz."</b>"."<hr>";
    }elseif($s == "*"){
        $p = $text1 * $text2;
        echo "<hr>"."<h2> Результат: </h2>"."<b>".$p."</b>"."<hr>";
    }elseif($s == "/"){
        $d = $text1 /$text2;
        echo "<hr>"."<h2> Результат: </h2>"."<b>".$d."</b>"."<hr>";
    }elseif($s=="%"){
        $pr = ($text1 / 100) * $text2;
        echo "<hr>"."<h2> Результат: </h2>"."<b>".$pr."</b>"."<hr>";
    }elseif($s == "^"){
        $q = $text1**$text2;
        echo "<hr>"."<h2> Результат: </h2>"."<b>".$q."</b>"."<hr>";
    }

}
?>