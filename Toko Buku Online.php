<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'toko buku online';

    $conn = mysqli_connect($hostname,$username,$password,$dbname)or die('Gagal terhubung ke Database')
?>