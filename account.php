<?php require "db.php";
 if(!isset($_SESSION['logged_user'])){ 
     if(!isset($_SESSION['inf_user'])){
     header("Location: /login.php");
 exit(); 
     }
    }
?>




<div style="text-align: center ;"> Добро пожаловать</div>
