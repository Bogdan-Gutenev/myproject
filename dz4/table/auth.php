<html>
<heat>
    <title>Авторизация</title>
</heat>
<body>
<form method="post" action="site.php">
    <h1>Авторизация</h1>
    <input type="text" name="name" >
    <input type="text" name="email">
    <br><br>
    <input type="checkbox" name="ch">Запомнить меня
    <br><br>
    <input type="submit" name="sum" value="Готово!">
</form>
</body>
</html>


<?php
if ((empty($_POST['name']))&&(empty($_POST['email']))){
    echo "Введите данные";
}else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    setcookie('coo_name',$name, time(),'/');
    setcookie('coo_email', $email, time(),'/');
    setcookie('date', date('Y:m:d; h:i:s'));

}
/*
if (!empty($_POST['ch'])){
    setcookie('coo_name', $_POST['name'], time() + 365*24*60*60);
    setcookie('coo_email', $_POST['email'], time() + 365*24*60*60);
    setcookie('date', date('Y:m:d; h:i:s'));
}else{
    setcookie('coo_name', $_POST['name'], time());
    setcookie('coo_email', $_POST['email'], time());
    setcookie('date', date('Y:m:d; h:i:s'));
}*/
?>