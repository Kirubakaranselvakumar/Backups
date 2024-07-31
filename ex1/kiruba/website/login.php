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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Simple Validation</title>
</head>
<body>

    <form action ="demowebsite.php" method="POST">


<div class="position-absolute top-50 start-50 translate-middle ">    
    <p>
    <label for="name" class="form-label">Username</label>
    <input type="text" class="form-control" name = "username">
    <span style = "color:red"><?php echo $nameError ?></span>
    </p>

    <p>
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name = "password">
    <span style = "color:red"><?php echo $passwordError ?></span>
    </p>

    <button class="btn btn-success" name = "submit">Submit</button>
</div>

    </form>
</body>
</html>