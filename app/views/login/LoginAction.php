<?php
    $con = mysqli_connect("localhost","root","","tevi");

    if(isset($_POST['btn-login'])){
        $uname = $_POST['username'];
        $upass = $_POST['password'];

        if(empty($uname) || empty($upass)){
            echo 'Please fill in the blanks';
        }
        else {
            $db_username = md5($uname);
            $query = "select username,password,token from users where username= '$db_username' ";
            $result = mysqli_query($con,$query);
            
            if($row=mysqli_fetch_assoc($result)){
                $db_password = $row['password'];
                $db_token = $row['token'];

                if(md5($upass) == $db_password){
                    setcookie('admin',$db_token);
                    header("location:http://localhost/TeVi/public/Start");
                }
                else{
                    echo 'pass incorrect';
                }
            }
            else{
                echo 'please check your query';
            }
        
        }
    }
    
    
    // $con = mysqli_connect("localhost","root","","tevi");
    // if($con === false){
    //     die("ERROR: Could not connect. " . mysqli_connect_error());
    // } 

    // $sql = "SELECT username,password from users";



    // if($_REQUEST["username"] && $_REQUEST["password"]){

    // if($_REQUEST["username"]=="admin" && $_REQUEST["password"]=="admin"){
    //     header("location:http://localhost/TeVi/public/Start");
    // }
    // else echo "date gresite";
    
    // }
    // else echo "introduceti date";
?>