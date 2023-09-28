<?php
include "../control/profile_process.php";
?>
<html>
<head>   
<title>  
Profile  
</title>  
</head>  
<body>  
<?php include '../layouts/header.php';?>
<nav>
	<a href="home.php">Home</a> &nbsp | &nbsp
    <a id="js-div5" href="search.php">Search</a> &nbsp | &nbsp
    Welcome <?php echo $name;?>&nbsp | &nbsp 
    <a href="../control/logout.php">Log out</a>
</nav>

<br>Profile pic: <br>
<img src="<?php echo $file; ?>" width="100px" height="100px"> 
<br>Name: <?php echo $name; ?>
<br>Email: <?php echo $email; ?>
<br>Gender: <?php echo $gender; ?>
<br>Number: <?php echo $number; ?>



<br>
<br>
<a href='updateuser.php'><button>Edit profile</button></a>
<a href="../view/postad.php">
<button>Post Ad </button> </a>
<a href="../view/myads.php">
<button>My ads </button> </a>



<?php include '../layouts/footer.php';?>
<body>
</html>