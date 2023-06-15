<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'pwd_pinjamruang';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung ke Database');
?>