<?php 
if(isset($_POST['title'])){
    require '../db_connection.php';

    $title=$_POST['title'];
    if(empty($title)){
        header("location: ../index.php?mess=error");
    }else{

        $addqu=$conn->exec("INSERT INTO `todos` (`tittle`) VALUES ('$title')");
        if($addqu){
            header("location: ../index.php?mess=success");
        }else{
            header("location: ../index.php");
        }
        $conn=null;
        exit();
    }
}else{
    header("location: ../index.php?mess=error");
}