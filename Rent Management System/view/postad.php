<?php 
include ('../control/postad_process.php');
?>


<html>
    <head>
       
        <title >Post Ad</title>
</head>

<body>
<?php include '../layouts/header.php'; 
?>

<br>  
<br>

<h1 align=center style="color:red;"> POST AD</h1>
<form action="" method="POST" enctype="multipart/form-data">

<table align=center>
    
    
    <tr>
        <th align=right>Select Category:</th>
        <td><input type="radio" name="category" value="Bus">Bus
        <input type="radio" name="category" value="Truck">Truck
        <input type="radio" name="category" value="Car">Car 
        <input type="radio" name="category" value="Bike">Bike
        <input type="radio" name="category" value="Flat">Flat <font color="red"><?php echo $catgerror ?></font></td></tr>

<tr></tr>
<tr>
    <th align=right>Tittle:</th>
    <td><input type="text" name="tittle"><font color="red"><?php echo $tittleerror ?></font></td>
</tr>
<tr>
    <th align=right>Description:</th>
    <td><textarea name="description" ></textarea><font color="red"><?php echo $descerror ?></font></td>
</tr>
<tr>
    <th align=right>Rent(TK):</th>
    <td><input type="number" name="rent"><font color="red"><?php echo $renterror ?></font></td>
</tr>
<tr>
    <th align=right>Photo:</th>
    <td> <input type="file" id="files" name="image" multiple><font color="red"><?php echo $fileerror ?></font><br><br></td>
</tr>
<tr></tr><tr></tr>
<tr>
    <th ><br><br></th>
    <th align=left>Contact Details</th>
</tr>
<tr>
    <th align=right>Phone Number:</th>
    <td><input type="number" name="number"><font color="red"><?php echo $numerror ?></font></td>
</tr>
<tr>
    <th align=right>Email:</th>
    <td><input type="email" name="email"><font color="red"><?php echo $emailerror ?></font></td>
</tr>
<tr>
    <td></td>
    <td><input type="Reset" name="Reset" value="Reset">
    <a href="../view/myads.php">
    <input type="Submit" name="Submit" value="Post ad"> </a>
</td>

</tr>



</table>
</form>
</body>
</html>

