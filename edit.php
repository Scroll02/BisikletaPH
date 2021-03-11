<?php
include "projectConnection.php";
$id=$_GET["id"];
$buyername="";
$productname="";
$productnumber="";
$amount="";
$image="";
$res=mysqli_query($link,"select * from table1 where id=$id");
while($row=mysqli_fetch_array($res))
{
$buyerName=$row["buyername"];
$productName=$row["productname"];
$productNumber=$row["productnumber"];
$amount=$row["amount"];
$image=$row["image"];
}
?>


<!DOCTYPE html>

<html lang="en">

 <head>
    <title>Welcome to Bisikelta PH!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="home.css">

  </head>
  
 <body>
<nav class="navbar navbar-expand-md">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="images\header-background.jpg" alt="Checkerboard" widht="150" height="100">
   <div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li> 
      
		<li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
		
		<li class="nav-item">
        <a class="nav-link" href="ridesafe.php">Safety Tips</a>
      </li>
		
		<li class="nav-item">
        <form>
           <a class="nav-link" href="products.php">Shop</a>
        </form>
      </li> 
		
		<li class="nav-item">
        <form>
           <a class="nav-link" href="form.php">Log-In</a>
        </form>
      </li> 

		<li class="nav-item">
        <a class="nav-link" href="file_maintenance.php"><input type="image" src="images/icon3.png" alt="Submit" width="48" height="48"></a>
      </li>
       	
       	
	  
    </ul>
  </div>
</nav>
<div class="container">
<div class="col-lg-4">
   <h2>Basic Buyer Information /<br> Buyer Records</h2>
    <form action="" name="form1" method="post" enctype="multipart/form-data">
        <div class="form-group">
      <label for="buyername">buyername</label>
      <input type="text" class="form-control" id="buyername" placeholder="Enter name" name="buyername" value="<?php echo $buyerName; ?>">
    </div>
    <div class="form-group">
      <label for="productname">productname</label>
      <input type="text" class="form-control" id="productname" placeholder="Enter product name" name="productname" value="<?php echo $productName; ?>">
    </div>
	<div class="form-group">
      <label for="productnumber">productnumber</label>
      <input type="text" class="form-control" id="productnumber" placeholder="Enter product number" name="productnumber" value="<?php echo $productNumber; ?>">
	  <div class="form-group">
      <label for="amount">amount</label>
      <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount" value="<?php echo $amount; ?>">
    </div>
	
	<div class="form-group">
      <label for="contact">image</label>
      <input type="file" class="form-control" name="f1">
    </div>
	
	<button type="submit" name="update" class="btn btn-default">update</button>

  </form>
</div>
</div>
 
</body>

<?php
if(isset($_POST["update"]))
{
	
	$tm=md5(time());
	$fnm=$_FILES["f1"]["name"];
	
	if($fnm=="")
	{
	mysqli_query($link,"update table1 set buyername='$_POST[buyername]',productname='$_POST[productname]',productnumber='$_POST[productnumber]',amount='$_POST[amount]' where id=$id");
	}
	else
	{
	$dst="./images/".$tm.$fnm;
	$dst1="images/".$tm.$fnm;
	move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
	
	mysqli_query($link,"update table1 set buyername='$_POST[buyername]',productname='$_POST[productname]',productnumber='$_POST[productnumber]',amount='$_POST[amount]',image='$dst1' where id=$id");
	}
	
	
	
	
	$dst="./images/".$tm.$fnm;
	$dst1="images/".$tm.$fnm;
	move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
	
	
mysqli_query($link,"update table1 set buyername='$_POST[buyername]',productname='$_POST[productname]',productnumber='$_POST[productnumber]',amount='$_POST[amount]' where id=$id");
	?>
	<script type="text/javascript">
	window.location="file_maintenance.php";
	</script>
	<?php
}
?>



</html>