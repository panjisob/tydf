<?php 
include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
try {
    //code...
    $nama = $_POST['nama'];
    $username = $_POST ['username'];
    $pass = $_POST ['pass'];

    echo $nama." ".$username." ",$pass;

    $sql = "INSERT INTO account (username, password, nama, role) VALUES ('$username','$pass','$nama','mahasiswa')";
    $result = $link->prepare($sql);
    $result->execute();
    echo "berhasil harusnya";
} catch (PDOException $e) {
    echo $e->getMessage();    
}

?>