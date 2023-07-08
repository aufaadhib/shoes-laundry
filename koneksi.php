<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'bshoes';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung ke Database');
?>