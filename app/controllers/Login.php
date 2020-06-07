<?php

class Login extends Controller
{

    public static $message;

    function index()
    {
        $this->view('login/Login');
    }

    function login_action()
    {
        $db = Database::getInstance();
        $con = $db->getConnection();

        if (isset($_POST['btn-login'])) {
            $uname = $_POST['username'];
            $upass = $_POST['password'];

            if (empty($uname) || empty($upass)) {
                self::$message = "Missing credentials";
                $this->view('login/Login');
            } else {
                $db_username = hash("sha256", $uname);
                $query = "select username,password,token from users where username= '$db_username' ";
                $result = mysqli_query($con, $query);

                if ($row = mysqli_fetch_assoc($result)) {
                    $db_password = $row['password'];
                    $db_token = $row['token'];

                    if (hash("sha256", $upass) == $db_password) {
                        setcookie('admin', $db_token, time() + 60 * 10, '/');
                        header("location:http://localhost/TeVi/public/Start");
                    } else {
                        self::$message = "Incorrect password";
                        $this->view('login/Login');
                    }
                } else {
                    self::$message = "Username doesn't exist";
                    $this->view('login/Login');
                }
            }
        }
    }
}
