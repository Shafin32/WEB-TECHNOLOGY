<?php
include ("../model/mydb.php");


$category=$_REQUEST["category"];



$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchAds("myad", $conobj, $category);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $category=$row["Category"];
        $tittle=$row["Tittle"];
        $description=$row["Description"];
        $rent=$row["Rent"];
        $email=$row["Email"];
        $number=$row["Number"];
        $file=$row["File"];

        echo $category." ".$tittle." ".$description." ".$rent." ".$email." ".$number." ".$file;
    }
}
else
{
    echo "no data found";
}


?>