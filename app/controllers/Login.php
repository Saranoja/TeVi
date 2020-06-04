<?php

class Login extends Controller {
    function index() {
        $this->view('login/Login');
    }

    function login_action(){
        $con = mysqli_connect("localhost","root","","tevi");
        if(isset($_POST['btn-login'])){
            $uname = $_POST['username'];
            $upass = $_POST['password'];

            if(empty($uname) || empty($upass)){
                echo 'Please fill in the blanks';
            }
            else {
                $db_username = hash("sha256", $uname);
                $query = "select username,password,token from users where username= '$db_username' ";
                $result = mysqli_query($con,$query);
                
                if($row=mysqli_fetch_assoc($result)){
                    $db_password = $row['password'];
                    $db_token = $row['token'];

                    if(hash("sha256", $upass) == $db_password){
                        setcookie('admin',$db_token, '/');
                        header("location:http://localhost/TeVi/public/Start");
                    }
                    else{
                        echo 'Password incorrect';
                    }
                }
                else{
                    echo 'Username not registered';
                }
            
            }
        }
    }
}

?>