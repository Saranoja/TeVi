<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login-TeVi</title>
        <link rel="stylesheet" href="Styles/Login.css">
    </head>
<body>
        
        <form class="box" method="post">
            <h1>Login</h1>
            <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">

            
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">

            <input type="Submit" value="Login">
        </form>
</body>
</html>


<?php
    if($_REQUEST["username"] && $_REQUEST["password"]){

    $mysql = new mysqli ('localhost', 'root','','tevi');
    
    if (mysqli_connect_errno()) {
        die ('Conexiunea a esuat...');
    }
    if (!($rez = $mysql->query ('select * from users where username= \' '.$_REQUEST["username"] .' \' and password= \' '.$_REQUEST["password"] .' \' '))){
        echo "Date gresite";
    }
    else header("location:HomePage.php");
    
    $mysql->close();
    }
    else echo "introduceti date";
?>