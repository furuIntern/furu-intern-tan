<?php
    $user=$_POST["user"];
    $password=$_POST["password"];
    if($user == "admin" && $password == "12345") {
        echo "chao mung";
    }
    else{
        echo "sai thong tin dang nhap";
    }
?>