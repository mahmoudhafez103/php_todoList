<?php 
if(isset($_POST['id'])){
    require '../db_connection.php';

    $id=$_POST['id'];
    if(empty($id)){
        echo 0;
    }else{

        $addqu=$conn->exec("DELETE FROM `todos` WHERE id=$id");
        if($addqu){
            echo 1;
        }else{
            echo 0;
        }
        $conn=null;
        exit();
    }
}else{
    header("location: ../index.php?mess=error");
}