<?php
include '../model/mydb.php';
$printcookie="";
setcookie("visit","1",time()+360);
if(isset($_COOKIE["visit"]))
{
    $printcookie= "visited";
}
else
{
    $printcookie= "welcome";
}


$passworderror="";
$onameerror="";
$numerror="";
$gendererror="";
$emailerror="";
$fileerror="";
if(isset($_REQUEST["Submit"]))
{

$oname=$_REQUEST["name"];    
$haserror=0;
if(empty($oname))
{
    
    $onameerror= "   *Name not found.* " . "<br>" ;
    $haserror=1;
}
// else
// {
//     echo "your name is: " .$oname . "<br>";
// }

$num=$_REQUEST["number"];
if(empty($num))
{
    $numerror= "      * number is not set * "  . "<br>";
    $haserror=1;

}
// else
// {
//     echo "number is: " .$num . "<br>";
// }

if(!isset($_REQUEST["gender"]))
{
    $gendererror= "    * gender is not set *" . "<br>";
    $haserror=1;
}
// else
// {
//     $gender=$_REQUEST["gender"];
//     echo "Gender set: ".$gender . "<br>" ;    

// }

if(empty($_REQUEST["email"]) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
   $emailerror= "     * please enter a valid email address *" ."<br>";
    $haserror=1;
}

// else{
//     $email=$_REQUEST["email"];
//     echo "your email address is ".$email ."<br>" ;
// }



$password =$_REQUEST["pass"];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

    if(empty($_REQUEST["pass"])|| !$uppercase || !$lowercase || !$number || $specialChars || strlen($password) < 8) 
    {
        $passworderror=' * Password should be at least 8 characters in length and should include at least one upper case letter, one number and one special character. *';
        $haserror=1;

    }
    // else{
    //  echo 'Strong password.'."<br>";
    // }

if(empty($_FILES["image"]["name"]))
{
    $fileerror= " * enter a file *";
    $haserror=1;
}
else{
    //$file= $_FILES["image"]["name"];
    //echo $file. "<br>";
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"].".jpg");
}




if($haserror==0)
{

 $mydb= new MyDB();
 $conobj= $mydb->openCon();
 $result= $mydb->insertData("owner",$_REQUEST["name"],$_REQUEST["number"],$_REQUEST["gender"],$_REQUEST["email"],$_REQUEST["pass"],"../uploads/".$_FILES["image"]["name"].".jpg",$conobj);
 if($result===TRUE)
 {
    echo "Success";
 }   
 else{
    echo "Error" . $conobj->error;
 }






// $existingdata=file_get_contents("../data/jsondata.json");
// $phpdata=json_decode($existingdata);
// $formdata=array(
//     "name"=>$_REQUEST["name"],
//     "number"=>$_REQUEST["number"],
//     "gender"=>$_REQUEST["gender"],
//     "password"=>$_REQUEST["pass"],
//     "email"=>$_REQUEST["email"],
//     "file"=>"../uploads/".$_FILES["image"]["name"].".jpg",
// );
// $phpdata[]=$formdata;

// $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

// if(file_put_contents("../data/jsondata.json",$jsondata))
// {
// echo "file written successfully";
// }
// else{
// echo "file written failed";
// }

}


}
?>