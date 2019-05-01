<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LUCKY Apartment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    <style>html,body{overflow-x: hidden;}</style>
    <style>html,body{overflow-y: hidden;}</style>
    <!--<script src="main.js"></script>-->
</head>
<body style="background-color:rgb(242, 243, 243);">
    <div class="container">
        <form action='' method="post">
            <div class="left">
                <img src="image/dorm.jpg">
            </div>
            <div class="right">
                    <div class="logo">
                            <img src="image/logo.png" style="width:40%">
                    </div>
                
                <div class="total">
                    <div class="username">
                        <input type="text" name="username" placeholder="Username" required>
                        
                    </div>

                    <div class="password">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="login">
                        <input type="submit" value="Login">
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>

<?php
  if(isset($_POST["username"]) && isset($_POST["password"])) {
        // username and password sent from form 
        
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

        $sql = "SELECT * FROM `user` WHERE username = '$myusername' AND password = '$mypassword'";
        $result = $conn->query($sql) or die($conn->error);
        $row = $result->fetch_assoc();

        if ($row == null) {
        echo "<script>alert('username or password is not corret')</script>";
        header('refresh:0; ?page=login');
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['role'] =  $row['role'];
            header('location:?page=home');
        }
    }
?>      