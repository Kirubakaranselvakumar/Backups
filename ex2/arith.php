<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <form method="POST">
    <label>Input1</label>
    <input type="number" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" name="value1">

    <label>Input2</label>
    <input type="number" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)" name="value2">

    <button value="submit" class="btn btn-success" name="submit">submit</button>
    </form>

    <?php
        $val1 = $_POST['value1'];
        $val2 = $_POST['value2'];

        if(isset($_POST['submit'])){
            print "<br><br>";
            echo "ADDITION ". $val1 + $val2;
            print "<br><br>";
            echo "SUBTRACTION ".$val1 - $val2;
            print "<br><br>";
            echo "MULTIPLICATION ".$val1 * $val2;
            print "<br><br>";
            echo "DIVISION ".$val1 / $val2;
            print "<br><br>";
            echo "MODULO DISION ".$val1 % $val2;
            print "<br><br>";
        }

    ?>
</body>
</html>