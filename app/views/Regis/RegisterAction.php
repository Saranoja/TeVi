 <?php
    // $con = mysqli_connect('localhost','root','','tevi');

    // if(isset($_POST['btn-register'])){
    //     $uname = mysqli_real_escape_string($con,$_POST['username']);
    //     $upass = mysqli_real_escape_string($con,$_POST['password']);
    //     $uutoken = $uname.$upass;
       

    //     if(empty($uname) || empty($upass)){
    //         echo "pls fill";
    //     }
    //     else{
    //         $User = hash("sha256", $uname);
    //         $query = "select username from users where username= '$User' ";
    //         $result = mysqli_query($con,$query);
    //         if($row=mysqli_fetch_assoc($result)){
    //             echo 'Username taken';
            
    //         }
    //         else{
    //         $Pass = hash("sha256", $upass);
    //         $Token = hash("sha256", $uutoken);
    //         $sql = "insert into users (username,password,token) values ('$User','$Pass','$Token')";
    //         $result = mysqli_query($con,$sql);

    //         if($result){
    //             header("location:http://localhost/TeVi/public/Login");
    //         }
    //         else{
    //             echo 'please check your data';
    //         }
    //         }
    //     }
    // }
?> 