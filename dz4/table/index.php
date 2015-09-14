<?php
if ((empty($_COOKIE['coo_name'])) && (empty($_COOKIE['coo_email']))){
    include 'auth.php';
}else{
    include 'site.php';
}
?>