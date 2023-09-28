<?php
session_start();
include "../model/mydb.php";
$name=$number=$email=$gender=$file="";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}

$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->getUserInfo("owner",$_SESSION["email"], $conobj);  
if($result->num_rows >0)
{
    while ($row=$result->fetch_assoc()){
        $name=$row["Name"];
        $number=$row["Number"];
        $email=$row["Email"];
        $gender= $row["Gender"];
        $file=$row["File"];

    }
}

// $jsondata = file_get_contents("../data/jsondata.json");
// $phpdata= json_decode($jsondata);
// foreach($phpdata as $myobj)
// {
//     if($_SESSION["email"]==$myobj->email)
//     {

//         $name= $myobj->name."<br>";
//         $email= $myobj->email."<br>";
//         $number= $myobj->number."<br>";
//         $gender=$myobj->gender. "<br>";
//     }
// }


?>