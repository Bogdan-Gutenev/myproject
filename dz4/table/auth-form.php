<html>
<heat>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</heat>
<body>
<form method="post" action="auth-form.php">
    <h1>Авторизация</h1>
    <input type="text" name="name">
    <input type="text" name="email">

    <br><br>
    <input type="submit" name="sum" value="Готово!">
</form>
</body>
</html>


<?php
include "auth.php";
?>