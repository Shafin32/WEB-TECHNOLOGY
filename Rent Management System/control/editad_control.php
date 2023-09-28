<?php

include "../model/mydb.php";

$email=$_REQUEST["email"];


$mydb = new Mydb();
$conobj = $mydb->openCon();
$result=$mydb->getAdInfo("myad",$email , $conobj);

if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
{
    $tittle=$row["Tittle"];
    $description=$row["Description"];
    $rent=$row["Rent"];
    $number=$row["Number"];
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
$result=$mydb->editAds("myad", $conobj, $_REQUEST["tittle"], $_REQUEST["description"], $_REQUEST["rent"], $file,$_REQUEST["number"], $email );
}






?>