<?php
include ("../control/editad_control.php");
?>
<html>

<body>


<form action="" method="POST" enctype="multipart/form-data">
Tittle:        
<input type="text" name="tittle" value="<?php echo $tittle; ?>" size="15"/><br> <br>  
 
Description:
<input type="text" name="description" value="<?php echo $description; ?>" size="15"/><br> <br>  

Rent:
<input type="text" name="rent" value="<?php echo $rent; ?>" size="15"/><br> <br>  

 Number:       
<input type="text" name="number" value="<?php echo $number; ?>" size="15"/> <br> <br>    
  
<br>  
<input type="file" name="image">
<img src="<?php echo $file; ?>" width="100" height="100">

<br> <br>  


<input type="Submit" name="update" value="Update"> 
</form>
</body>
</html>