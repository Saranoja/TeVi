<?php
    $con = mysqli_connect('localhost','root','','tevi');

    if(isset($_POST['btn-register'])){
        $uname = mysqli_real_escape_string($con,$_POST['username']);
        $upass = mysqli_real_escape_string($con,$_POST['password']);
        $uutoken = bin2hex(random_bytes(10));
       

        if(empty($uname) || empty($upass)){
            echo "pls fill";
        }
        else{
            $User = md5($uname);
            $Pass = md5($upass);
            $sql = "insert into users (username,password,token) values ('$User','$Pass','$uutoken')";
            $result = mysqli_query($con,$sql);

            if($result){
                header("location:http://localhost/TeVi/public/Login");
            }
            else{
                echo 'please check your data';
            }
        }
    }
    
?>