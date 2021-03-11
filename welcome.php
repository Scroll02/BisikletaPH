<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:form.php');
}
?>


<html>
<head>
<title> Welcome User! </title>

</head>
<body>		

		<a href="home.php">Proceed to Homepage </a>
		<a href="logout.php"> LOGOUT </a>
		
		<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
		
</body>

</html>