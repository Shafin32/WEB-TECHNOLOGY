<?php
session_start();
include "../model/mydb.php";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}

$email=$_SESSION["email"];



$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->getUserInfo("owner", $email, $conobj);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
{
    $name=$row["Name"];
    $number=$row["Number"];
    $gender=$row["Gender"];
    $password=$row["Password"];
    $file= $row["File"];

}

}
if(isset($_REQUEST["update"]))
{
   
    if($_FILES["image"]["name"]!="")
    {
       // echo $_FILES["image"]["name"];
        $file="../uploads/".$_FILES["image"]["name"].".jpg";
        move_uploaded_file($_FILES["image"]["tmp_name"],$file);
    }
$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->updateUser("owner", $conobj, $_REQUEST["name"], $_REQUEST["number"], $_REQUEST["gender"],  $_REQUEST["pass"],$file, $email );
}






?>