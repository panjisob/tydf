<?php
include "../connect.php";

try {
    //code...
    $username = $_POST ['username'];
    $pass = $_POST ['pass'];

    echo $username . $pass;

    $sql = "SELECT * FROM account WHERE username='$username' AND password='$pass'";
    $result = $link->prepare($sql);
    $result->execute();
    $data = $result->fetchAll(\PDO::FETCH_ASSOC);
    print_r($data);

    if (!empty($data)){
        session_start();
        
        $_SESSION['namauser'] = $data[0]['username'];
        $_SESSION['role'] = $data[0]['role'];
        
        echo " session masuk" . $data[0]['username'];
        header('location:../index.php?module=home');
    } else {
        echo "<center> LOGIN GAGAL !<br>
         Username atau Password anda tidak benar.<br>
         Atau akun anda sedang diblokir.<br>";
        echo "<a href=../index.php><b>ULANGI LAGI</b></a></center>";
    }

} catch (PDOException $e) {
    echo $e->getMessage();    
}
