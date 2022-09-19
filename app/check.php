<?php 
if(isset($_POST['id'])){
    require '../db_connection.php';

    $id=$_POST['id'];
    if(empty($id)){
        echo "error";
    }else{

        $todo=$conn->prepare("SELECT `id`, `checked` FROM `todos` WHERE id=?");
        
        $todo->execute([$id]);
        
        $addqu=$todo->fetch();
        $uid=$addqu['id'];
        $checked=$addqu['checked'];

        $uchecked=$checked?0:1;

        $ress=$conn->query("UPDATE `todos` SET checked=$uchecked WHERE id=$uid");

        if($ress){
            echo $checked;
        }else{
            echo"error";
        }

        $conn=null;
        exit();
    }
}else{
    header("location: ../index.php?mess=error");
}