<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login | Unicure India</title>
</head>
<body>

<?php
session_start();
$con=mysqli_connect('localhost','unicurei_manav','@`Manav`#123','unicurei_new');
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = " SELECT * FROM `logindata` WHERE username='$username'AND password='$password' ";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);

    if($count==1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo "<script>window.location.href='employer.php';</script>";
       
        
    }
    else{
        echo "<h3>Invalid Creditianls</h3>";
    }
}
?>
    

    <div class="container">
        <form action="login.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
    
</body>
</html>