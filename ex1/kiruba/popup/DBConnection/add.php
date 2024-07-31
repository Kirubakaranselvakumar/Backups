<?php
    
    $id=$name=$age=$email=$mentor="";
    error_reporting(1);
    session_start();

    require "db.php";
    if(isset($_POST['submit'])){
        $idErr=$nameErr=$ageErr=$emailErr=$mentorErr=""; 
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $mentor = $_POST['mentor'];

        if(empty($mentor)){
            $mentorErr = "Enter Mentor name";
            // header("Location: add.php");
            
        }
        elseif(empty($email)){
            $emailErr = "Enter Email";
            // header("Location: add.php");
           
        }
        elseif(empty($age)){
            $ageErr = "Enter Age";
            // header("Location: add.php");
           
        }
        elseif(empty($name)){
            $nameErr = "Enter name";
            // header("Location: add.php");
           
        }
        elseif(empty($id)){
            $idErr = "Enter valid Id";
            // header("Location: add.php");
            
        }
        else{      
        $query = $pdo->prepare("INSERT INTO public.squad (id, name, age, email, mentor) VALUES (:id, :name, :age, :email, :mentor)");
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(':age', $age);
        $query->bindParam(':email', $email);
        $query->bindParam(':mentor', $mentor);    
        if($query->execute()){
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: index.php");
            
        }
        
        else{
            $_SESSION['status'] = " not Inserted ";
            header("Location: index.php");
           
          
        }
    }
     
        
    }

?>


<!doctype html>
<html lang="ar" >
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Hello World</title>
  </head>
  <body>
  <?php 
 require "nav.php";
 ?>

<li class="btn btn-info ">
          <a class="nav-link" href="index.php"> <i class="bi bi-arrow-left-circle"></i> &nbsp; Back</a>
        </li>
<form method="post">

    <div class="card mx-auto m-3 p-3" style="width:450px">
        <label>id</label>
        <input type="number" name="id" class="form-control  my-2" >
        <span class='red-message my-1' style="color:red">* <?php echo $idErr; ?></span>
        
        <label>name</label>
        <input type="text" name="name" class="form-control my-2"> 
        <span class='red-message my-1' style="color:red"> <?php echo "$nameErr *"; ?></span>
        

        <label>age</label>
        <input type="number" name="age" class="form-control my-2"> 
        <span class='red-message my-1'style="color:red"> <?php echo "$ageErr *"; ?></span>

        <label>email</label>
        <input type="email" name="email" class="form-control my-2"> 
        <p class='red-message my-1'style="color:red"> <?php echo  " $emailErr *"; ?></p>

        <label>mentor</label>
        <input type="text" name="mentor" class="form-control my-2">
        <span class='red-message my-1'style="color:red">* <?= $mentorErr; ?></span>

        <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php">Cancel</a><br>

    </div>
</form>

