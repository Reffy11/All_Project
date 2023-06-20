<?php
include 'db.php';

if(isset($_POST['send'])){
    $name= $_POST['name'];
    $sql = "insert into addt (name) values ('$name')";

   $val= $db-> query($sql);
    if($val){
        header('location:index.php');
    }
}




?>