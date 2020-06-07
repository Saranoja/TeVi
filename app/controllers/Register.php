<?php

class Register extends Controller
{
    public static $message;

    function index()
    {
        $this->view('Regis/Register');
    }

    function register_action()
    {
        $db = Database::getInstance();
        $con = $db->getConnection();

        if (empty($_POST['username']) || empty($_POST['password'])) {
            self::$message = "Missing credentials";
            $this->view('Regis/Register');
        }

        if (isset($_POST['btn-register'])) {
            $uname = mysqli_real_escape_string($con, $_POST['username']);
            $upass = mysqli_real_escape_string($con, $_POST['password']);
            $uutoken = $uname . $upass;
            $User = hash("sha256", $uname);
            $query = "select username from users where username= '$User' ";
            $result = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($result)) {
                self::$message = "Username already exists";
                $this->view('Regis/Register');
            } else {
                $Pass = hash("sha256", $upass);
                $Token = hash("sha256", $uutoken);
                $sql = "insert into users (username,password,token) values ('$User','$Pass','$Token')";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    header("location:http://localhost/TeVi/public/Login");
                } else {
                    self::$message = "Invalid data input";
                    $this->view('Regis/Register');
                }
            }
        }
    }
}
