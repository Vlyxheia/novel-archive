<?php
require 'config.php';
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('User or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name', '$username', '$email', '$password')";
            mysqli_query($conn,$query);
            echo
        "<script> alert('Crete Successfully'); </script>";
        }
    else{
        echo
        "<script> alert('Password Does Not Match'); </script>";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Create</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required value=""> <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required value=""> <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required value=""> <br>
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
        <button type="submit" name="submit">Create</button>
    </form>
    <br>
    <a href="index.php">Log In</a>
</body>
</html>