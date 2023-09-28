<?php
include ('../control/login_control.php');
?>

<html>
    <head>
       
        <title >Login</title>
<link rel="stylesheet" type="text/css" href="../css/login.css">

</head>
<body >
<div class=container>
<form action="" method="POST">
<div class="center">
<?php include "../layouts/header.php"?>
</div>
<h4>LOG IN</h4>
<input type="text" id="input-field" name="email" size="25" placeholder="Enter Email">
 <input type="password" id="input-field" name="password" size="25" placeholder="Enter Password">
<br>
 <input type="Submit" class="button" name="login" value="Log in">
<a href="Owner.php">
<input type="button"  class="button" name="signup" value="Sign up"> </a>
           
</form>

</div>


</body>
</html>
