<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login-TeVi</title>
        <link rel="stylesheet" href="http://localhost/TeVi/public/style/Login.css">
    </head>
<body>
        
        <form class="box" action="http://localhost/TeVi/public/Login/login_action" method="post">
            <h1>Log in</h1>
            <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">

            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">

            <input type="Submit" value="Login" name="btn-login">

            <a href="http://localhost/TeVi/public/Register">Sign up!</a>
            <a href="http://localhost/TeVi/public/Start">Enter as guest!</a>

            <h4 id="errorText"><?= Login::$message?></h4>
        </form>
</body>
</html>




