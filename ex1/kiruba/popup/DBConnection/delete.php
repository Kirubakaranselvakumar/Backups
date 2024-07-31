<?php
    require "db.php";
    require "db.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM public.squad WHERE id=?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);
    }
    header('Location: index.php');
    exit;
?>