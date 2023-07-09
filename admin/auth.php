<?php
session_start();
include "../koneksi.php";
$username = mysqli_real_escape_string($conn,$_POST['username']) ;
$password = mysqli_real_escape_string($conn, md5($_POST['password'])) ;

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    $login = mysqli_query($conn, $sql);
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {
        $_SESSION['username'] = $r['username'];
        header("location:dashboard.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
    mysqli_close($conn);
}else{
    header("location:index.php?pesan=gagal");
}