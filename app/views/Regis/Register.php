<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration-TeVi</title>
        <link rel="stylesheet" href="http://localhost/TeVi/public/style/Login.css">
    </head>
<body>
        
        <!-- <form class="box" action="http://localhost/TeVi/public/Register/register_action" method="post"> -->
        <form class="box" id="registerForm"> 
            <h1>Register</h1>
            <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">

            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">

            <input type="submit" value="Register" id="btn-register">

            <a href="http://localhost/TeVi/public/Login">Already have an account</a>
            <a href="http://localhost/TeVi/public/Start">Enter as guest!</a>

        </form>
        <script src="../app/ajax/registration.js"></script>
</body>
</html>