<?php

    $nameError = "";
    $passwordError = "";
   


    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        

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

    <form action = "demowesite.php" method="POST">
        
    <p>
    <label for="name">Username</label>
    <input type="text" name = "username">
    <span style = "color:red"><?php echo $nameError ?></span>
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