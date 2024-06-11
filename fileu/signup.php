<?php
include("connect.php");

if(isset($_GET['submit'])){
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql ="SELECT * FROM  loginn WHERE email='$email' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo '<script>alert("Error!");</script>';
    }
    else{
        $insert="INSERT INTO  loginn (email,password) VALUES('$email','$password')";
        mysqli_query($conn,$insert);
        header("location:login.php");
        exit();
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>

<title>signup</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>sign up</h2>
    <div class="error" id="error"></div>
    <form id="loginForm">
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn" name="submit">sign in </button>
    </form>
</div>


</body>
</html>

