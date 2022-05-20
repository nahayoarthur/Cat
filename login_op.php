<?php
require 'db.php';
$name=$_POST['name'];
$pwd=$_POST['pass'];

$_SESSION['username']=$name;
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
session_start();
$_SESSION['username']=$name;
    
    try
    {
    $sql = 'SELECT * FROM user WHERE username=:username AND password=:password';
    $statement = $connection->prepare($sql);
    $statement->execute(array(':username' => $name,':password' => $pwd));
    $count= $statement->rowCount();
        if($count>0)
        {
            $_SESSION["uname"]=$name;
            header("location:records.php");
        }else{
            header("location:Login.php");
        }
    }catch(PDOException $e)
    {
        $message=$e->getMessage();
    }   
?>