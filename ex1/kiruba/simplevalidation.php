<?php

    $nameError = "";
    $passwordError = "";
    $emailError = "";


    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(empty($username)){
            $nameError = "User Name is required";
        }
        else{
            $username = trim($username);
            echo $username;
        }


        if(empty($password)){
            $passwordError = "Password is required";
        }
        elseif(strlen($password)<8){
            $passwordError = "Must in 8 character";
        }
        else{
            $password = trim($password);
            echo $password;
        }


        if(empty($email)){
            $emailError = "Email is required";
        }
        else{
            $email = trim($email);
            echo $email;
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Validation</title>
</head>
<body>

    <form method="POST">
        
    <p>
    <label for="name">Username</label>
    <input type="text" name = "username">
    <span style = "color:red"><?php echo $nameError ?></span>
    </p>

    <p>
    <label for="email">Email</label>
    <input type="email" name = "email">
    <span style = "color:red"><?php echo $emailError ?></span>
    </p>

    <p>
    <label for="password">Password</label>
    <input type="text" name = "password">
    <span style = "color:red"><?php echo $passwordError ?></span>
    </p>

    <button name = "submit">Submit</button>

    </form>
</body>
</html>