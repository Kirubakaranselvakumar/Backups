

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
 session_start();
 ?>


<table class="table">
     <li class="btn btn-primary ">
          <a class="nav-link" href="add.php"> <i class="bi bi-plus-lg"></i> &nbsp; Add</a>
        </li>
      <?php
        if(isset($_SESSION['status']))
        {
          ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['status']; ?>
          </div>
          <?php
          
          unset($_SESSION['status']);
        }
      ?>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">email</th>
      <th scope="col">mentor</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require("db.php") ;
        $sql = "select * from squad";
        $result = $pdo->query($sql);
        if(!$result){
            die("Invalid Query");
        }
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "

        <tr>
            <th>$row[id]</th>
            <td>$row[name]</td>
            <td>$row[age]</td>
            <td>$row[email]</td>
            <td>$row[mentor]</td>
            <td>
                    <a class='btn btn-success' href='update.php?id=$row[id]'><i class='bi bi-pencil-fill'></i> </a>
                    <a class='btn btn-danger' href='delete.php?id=$row[id]'><i class='bi bi-trash3'></i> </a>
                    </td>

        </tr>
        ";
        }
    ?>


  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>