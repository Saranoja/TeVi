<?php
    if($_REQUEST["username"] && $_REQUEST["password"]){

    // $mysql = new mysqli ('localhost', 'root','','tevi');
    
    // if (mysqli_connect_errno()) {
    //     die ('Conexiunea a esuat...');
    // }
    // if (!($rez = $mysql->query ('select * from users where username= \' '.$_REQUEST["username"] .' \' and password= \' '.$_REQUEST["password"] .' \' '))){
    //     echo "Date gresite";
    // }
    if($_REQUEST["username"]=="admin" && $_REQUEST["password"]=="admin"){
        header("location:../about/HomePage.php");
    }
    else echo "date gresite";
    
    // $mysql->close();
    // }
    }
    else echo "introduceti date";
?>