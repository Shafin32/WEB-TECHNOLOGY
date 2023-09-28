<?php
include ("../model/mydb.php");


$email=$_REQUEST["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->deleteAd("myad", $conobj, $email);

if($result==TRUE)
{
    header("Location: ../view/myads.php");
}
else
{
    echo "can't delete";
}




?>