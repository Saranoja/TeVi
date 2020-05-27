<?php
    if($data["username"] && $data["password"]){

    if($data["username"]=="admin" && $data["password"]=="admin"){
        header("location:../start/StartPage.php");
    }
    else echo "date gresite";
    
    // $mysql->close();
    // }
    }
    else echo "introduceti date";
?>