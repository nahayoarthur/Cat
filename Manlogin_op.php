<?php

use LDAP\Result;

require 'db.php';
$name=$_POST['name'];
$pwd=$_POST['pass'];

   
    
    try
    {
    $sql = 'SELECT * FROM manager WHERE username=:username AND password=:password';
    $statement = $connection->prepare($sql);
    $statement->execute(array(':username' => $name,':password' => $pwd));
    $count= $statement->rowCount();
        if($count>0)
        {
            $_SESSION["uname"]=$name;
            header("location:adminchoose.php");
        }else{
            header("location:Login2.php");
        }
    }catch(PDOException $e)
    {
        $message=$e->getMessage();
    }   
?>