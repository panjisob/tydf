<?php

    // konfigurasi koneksi
    $host       =  "ec2-34-233-226-84.compute-1.amazonaws.com";
    $dbuser     =  "cvutuuwvhixpoh";
    $dbpass     =  "3525cd308cc9b7e6cf8c55e71553e3c048a617a81f9b600c288760619485fcf7";
    $port       =  "5432";
    $dbname     =  "da1m6k1u475d4c";
    // script koneksi php postgree
    $link = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
    if(!$link){
        echo "Gagal melakukan Koneksi";
    }
?>