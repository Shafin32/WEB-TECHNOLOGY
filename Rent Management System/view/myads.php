<?php
include "../control/myads_process.php";
?>

<html>
<head>   
<title>  
My ADs
</title>  

<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>  
<body>  

<h1> All Ads </h1>
<?php

if($result->num_rows > 0)
{
  
    while($row=$result->fetch_assoc()){

echo "<div class='column'";
        echo "<div class='card'>";
        echo "<img src='".$row["File"]."' alt=".$row["Tittle"]."width='100px' height='100px' />";
        
       echo " <p class='title'>".$row["Category"]."</h4> ";
       echo "<p>".$row["Tittle"]."</p>";
       echo "<p>". "Description: ".$row["Description"]."</p>";
        echo "<p>". "Email: ".$row["Email"]."</p>";
        echo "<p>". "Number: ".$row["Number"]."</p>";
        echo "<p>". "Rent(Tk): ".$row["Rent"]."</p>";
    echo "<a class='btn info' href='editad.php?email=".$row["Email"]."'>Edit</a>";
    echo "  ";
    echo "<a class='btn danger' href='deletead.php?email=".$row["Email"]."'>Delete</a>";
    echo "</div>";
    echo "</div>";


    }
  
}
else
{
    echo "no data available";
}

?>



</body>
    <html>