<?php
if (empty($_COOKIE['coo_name']) && empty($_COOKIE['coo_email'])){
    include 'auth-form.php';
}else{
    include 'index.php';
}
?>