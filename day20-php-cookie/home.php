<?php
session_start();
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/24/2020
 * Time: 8:46 PM
 */
if (!isset($_SESSION['username'])){
    $_SESSION['error'] = 'ban chua dang nhap dau, vao day lam gi';
    header('location: form_login.php');
    exit();
}

// home.php
// debug session dang co session nao
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
// su dung {} de hien thi gia tri cua mang ngay trong chuoi ma ko can noi chuoi.
echo "Xin chao, <b>{$_SESSION['username']}</b>";
echo "<br />";
echo "Xin chao, <b>{$_SESSION['success']}</b>";
echo "<br />"
echo "<a href='logout.php'>logout</a>";


?>