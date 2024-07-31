
<?php

include ('db.php');
session_start();

$usernameError='';
$passwordError='';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password']; 

    if(empty($username)){
        $usernameError = "Username is required";
    }
    else{
        $username = trim($username);
        // echo $firstname;
    }

    if(empty($password)){
        $passwordError = "Password is required";
    }
    elseif(strlen($password)<8){
        $passwordError = "Must in 8 character";
    }
    else{
        $password = trim($password);
        // echo $password;
        // header("Location:login.html");
    }

    $query = "select * from register where name = :username and password=:password";
    $result = $pdo->prepare($query);
    $result->execute(array(':username'=>$username, ':password'=>$password));
    $abc = $result->fetch();
    if($abc>0){
        header("Location: dashboard.php");
    }
    else{
        echo "Login Failed!!!";
    }
}
?>
