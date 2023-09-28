<?php
include ("../control/update_control.php");
?>
<html>

<body>


<form action="" method="POST" enctype="multipart/form-data">
Name:        
<input type="text" name="name" value="<?php echo $name; ?>" size="15"/><br> <br>  
 
 Number:       
<input type="text" name="number" value="<?php echo $number; ?>" size="15"/> <br> <br>  
  
Password:       
<input type="password" name="pass" value="<?php echo $password; ?>" size="15"/> <br> <br>  
  
   
Gender :  
<br>  
<input type="radio" name="gender" value="Male" 
<?php
if($gender=="Male")
echo "checked";
?>
/> Male <br>  
<input type="radio" name="gender" value="Female"
<?php
if($gender=="Female")
echo "checked";
?>
/> Female <br>  
<input type="radio" name="gender" value="Other"
<?php
if($gender=="Other")
echo "checked";
?>
/> Other  
<br>  
<br>  
  
<br>  
<input type="file" name="image">
<img src="<?php echo $file; ?>" width="100" height="100">

<br> <br>  


<input type="Submit" name="update" value="Update"> 
</form>
</body>
</html>