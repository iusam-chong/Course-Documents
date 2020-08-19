<?php

if(! isset($_GET["id"])){
    die("id not found !") ;
}

$id = $_GET["id"] ;
if(! is_numeric($id)){
    die("id not a number!") ;
}

$sql=<<<multi
    DELETE FROM employees where employeeId = $id 
multi;

require_once("config.php") ;
mysqli_query($link, $sql) ;
header("location: index.php");

?>