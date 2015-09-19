<?php
if ((empty($_POST['name']))&&(empty($_POST['email']))){
    echo "Введите данные";
}elseif ((isset($_POST['name']))&&(isset($_POST['email']))){
    $name = $_POST['name'];
    $email = $_POST['email'];
    setcookie('coo_name',$name, time());
    setcookie('coo_email', $email, time());
    setcookie('date', date('Y:m:d; h:i:s'));
    header("Location:site.php");
//
}
/*
if (!empty($_POST['name']) && !empty($_POST['email'])){
    if (isset($_POST['name']) && isset ($_POST['email'])) {
        setcookie('coo_name', $_POST['name'], time() + 365 * 24 * 60 * 60);
        setcookie('coo_email', $_POST['email'], time() + 365 * 24 * 60 * 60);
        setcookie('date', date('Y:m:d; h:i:s'));

    } else {
        setcookie('coo_name', $_POST['name'], time());
        setcookie('coo_email', $_POST['email'], time());
        setcookie('date', date('Y:m:d; h:i:s'));
    }
}*/
?>