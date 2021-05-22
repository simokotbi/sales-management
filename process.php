<?php
//connection variables:
//require_once("home.php");
$localhost='localhost:3308';
$my_user='root';
$my_password='';
$my_db='licagestionventes';
$charset='utf8mb4';
$port="3308";
$dsn = "mysql:host=$localhost;dbname=$my_db;charset=$charset;port=$port";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,//type d affichage des erreur;
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//fetchnum '[1]'...;
    PDO::ATTR_EMULATE_PREPARES => false, //for security stafs;
    ];
    try {
        $pdo = new PDO($dsn, $my_user, $my_password);
        } catch (PDOException $e) {
            echo $e->getMessage().' '.(int)$e->getCode();
        }
//connect to server and database:
// $connect=new mysqli($localhost,$my_user,$my_password,$my_db);
// //Verify Database Connection:
//     if(!$connect){
//         trigger_error($db->connect_error);
//     }
?>

