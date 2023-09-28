<?php
class MyDB{

    function openCon(){
        $conn = new mysqli("localhost", "root", "", "owner");
        return $conn;

    }

    function insertData($tablename,$Name,$Number,$Gender,$Email,$Password,$File,$conn){
        $sql="INSERT INTO $tablename (Name,Number,Gender,Email,Password,File) VALUES ('$Name','$Number','$Gender','$Email','$Password','$File')" ;  //query create

        $result=$conn->query($sql);  // using connection object and query function....query string (return)
        return $result;
    }

    function checkUser($tablename, $email, $password, $conn)
    {
        $sql="SELECT * FROM $tablename WHERE Email='$email' AND 
        Password='$password'";
        $result=$conn->query($sql);
        return $result;
    }

    function getUserInfo($tablename, $email, $conn)
    {
        $sql="SELECT * FROM $tablename WHERE Email='$email' ";
        $result=$conn->query($sql);
        return $result;
    }

  
    function updateUser($tablename, $conn, $name, $number,$gender,  $password, $file, $email )
    {

        $sql= "UPDATE $tablename SET Name='$name', Number='$number', Gender='$gender', Password='$password', File='$file' WHERE Email = '$email' ";
        $result = $conn->query($sql);
        return $result;
    }

    function insertAds($tablename,$Category,$Tittle,$Description,$Rent,$File,$Number,$Email,$conn)
    {
        $sql="INSERT INTO $tablename (Category,Tittle,Description,Rent,File,Number,Email) VALUES ('$Category','$Tittle','$Description','$Rent','$File','$Number','$Email')" ;  //query create
        
        $result=$conn->query($sql);  // using connection object and query function....query string (return)
        return $result;
    }


    function getAllUsersAds($tablename, $conn)
    {
    $sql="SELECT * FROM $tablename";
    $result = $conn->query($sql);
    return $result;
    }

    function deleteAd($tablename, $conn, $email)
    {
        $sql= "DELETE FROM $tablename WHERE email = '$email' ";
        $result=$conn->query($sql);
        return $result;
        
    }

    function searchAds($tablename, $conn, $category)
    {
        $sql="SELECT * FROM $tablename WHERE Category = '$category'";
        $result = $conn->query($sql);
        return $result;
    }


    function editAds($tablename, $conn, $tittle, $description, $rent,  $file, $number, $email )
    {

        $sql= "UPDATE $tablename SET Tittle='$tittle', Description='$description', Rent='$rent', File='$file', Number='$number' WHERE Email = '$email' ";
        $result = $conn->query($sql);
        return $result;
    }


    function getAdInfo($tablename, $email, $conn )
    {
        $sql="SELECT * FROM $tablename  WHERE Email = '$email' ";
        $result=$conn->query($sql);
        return $result;
    }







    
}

?>