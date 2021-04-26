<?php
//connection variables:
//require_once("home.php");
$localhost='localhost:3308';
$my_user='root';
$my_password='';
$my_db='licagestionventes';
//connect to server and database:
$connect=new mysqli($localhost,$my_user,$my_password,$my_db);
//Verify Database Connection:
    if(!$connect){
        trigger_error($db->connect_error);
    }
?>

