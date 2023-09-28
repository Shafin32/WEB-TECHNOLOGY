<?php
session_start();
include "../model/mydb.php";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}



$catgerror="";
$tittleerror="";
$numerror="";
$descerror="";
$renterror="";
$emailerror="";
$fileerror="";
if(isset($_REQUEST["Submit"]))
{
    
    $email=$_REQUEST["email"];
    $tittle=$_REQUEST["tittle"];
    $rent=$_REQUEST["rent"];
    $file= $_FILES["image"]["name"];
    $num=$_REQUEST["number"];
    $haserror=0;
    if(!isset($_REQUEST["category"]))
    {
        $catgerror= "    * Category is not set *" . "<br>";
        $haserror=1;
    }

    if(empty($tittle))
    {
        $tittleerror= "      * tittle is not set * "  . "<br>";
        $haserror=1;
    }

    if (empty($_REQUEST['description'])) 
    {
        $haserror=1;
        $descerror .= '* Please enter a short description *.<br/><br/>';
    }   
 
    if(empty($rent))
    {
        $renterror= "      * rent is not set * "  . "<br>";
        $haserror=1;

    }
 
    if(empty($_FILES["image"]["name"]))
    {
        $fileerror= " * enter a file *";
        $haserror=1;
    }
    else
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"].".jpg");
    }

    if(empty($num))
    {
        $numerror= "      * number is not set * "  . "<br>";
        $haserror=1;

    }

    if(empty($_REQUEST["email"]) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
    {
        $emailerror= "     * please enter a valid email address *" ."<br>";
        $haserror=1;
    }

    if($haserror==0)
    {

        $mydb= new MyDB();
        $conobj= $mydb->openCon();
        $result= $mydb->insertAds("myad",$_REQUEST["category"],$_REQUEST["tittle"],$_REQUEST["description"],
        $_REQUEST["rent"],"../uploads/".$_FILES["image"]["name"].".jpg",$_REQUEST["number"],$_REQUEST["email"],$conobj);
        if($result===TRUE)
        {
            echo "Success";
        }   
        else
        {
            echo "Error" . $conobj->error;
        }

   
    }

}
?>