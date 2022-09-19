<?php 

$ServerName="localhost";
$UserName="root";
$Pass="";
$DataBaseName="todolist";

try{
    $conn=new PDO("mysql:host=$ServerName;dbname=$DataBaseName",$UserName,$Pass);


    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo"connection failed : ".$e->getMessage();
}