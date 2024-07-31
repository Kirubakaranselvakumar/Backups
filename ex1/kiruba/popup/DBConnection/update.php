<?php
require "db.php";
$id = "";
$name = "";
$age = "";
$email = "";
$mentor = "";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:index.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM public.squad WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$id]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        header("location:index.php");
        exit;
    }

    $name = $row["name"];
    $age = $row["age"];
    $email = $row["email"];
    $mentor = $row["mentor"];
} elseif ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $mentor = $_POST["mentor"];

    $sql = "UPDATE public.squad
            SET name=?, age=?, email=?, mentor=?
            WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$name, $age, $email, $mentor, $id]);

    $success = "Record updated successfully";
    header("location:index.php");
}
?>




<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
        <input type="number" name="id" value="<?php echo $id; ?>" class="form-control  my-2"> <br>
        
        <label>name</label>
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control my-2"> <br>

        <label>age</label>
        <input type="number" name="age" value="<?php echo $age; ?>" class="form-control my-2"> <br>

        <label>email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control my-2"> <br>

        <label>mentor</label>
        <input type="text" name="mentor" value="<?php echo $mentor; ?>" class="form-control my-2"> <br>

        <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php">Cancel</a><br>

    </div>
</form>