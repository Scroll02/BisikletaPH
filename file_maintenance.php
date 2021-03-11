<?php
include "projectConnection.php";
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
      <input type="text" class="form-control" id="buyername" placeholder="Enter name" name="buyername">
    </div>
    <div class="form-group">
      <label for="productname">productname</label>
      <input type="text" class="form-control" id="productname" placeholder="Enter product name" name="productname">
    </div>
	<div class="form-group">
      <label for="productnumber">productnumber</label>
      <input type="text" class="form-control" id="productnumber" placeholder="Enter product number" name="productnumber">
	  <div class="form-group">
      <label for="amount">amount</label>
      <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount">
    </div>
	
	<div class="form-group">
      <label for="contact">Image</label>
      <input type="file" class="form-control"  name="f1">
    </div>
	
	<button type="submit" name="insert" class="btn btn-default">insert</button>
	<button type="submit" name="update" class="btn btn-default">update</button>
<button type="submit" name="delete" class="btn btn-default">delete</button>

  </form>
</div>
</div>
</div>

<div class="col-lg-12">

<table class="table table-bordered">
 <thead>
 <tr>
 <th>Id</th>
 <th>Image</th>
<th>Buyername</th>
 <th>Productname</th>
 <th>Productnumber</th>
<th>Amount</th>
<th>Edit</th>
<th>Delete</th>
 </tr>
 </thead>
 <tbody>
<?php
$res=mysqli_query($link,"select * from table1");
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["id"]; echo "</td>";
echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
echo "<td>"; echo $row["buyername"]; echo "</td>";
echo "<td>"; echo $row["productname"]; echo "</td>";
echo "<td>"; echo $row["productnumber"]; echo "</td>";
echo "<td>"; echo $row["amount"]; echo "</td>";
echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"<button type="button"
class="btn-success">Edit</button></a> <?php echo "</td>";
echo "<td>"; ?> <a href="projectDelete.php?id=<?php echo $row["id"]; ?>"<button type="button"
class="btn-danger">Delete</button></a> <?php echo "</td>";
echo"</tr>";

}
?>
 </tbody>
 </table>
 
</body>

<?php
if(isset($_POST["insert"]))
{
	
	$tm=md5(time());
	$fnm=$_FILES["f1"]["name"];
	$dst="./images/".$tm.$fnm;
	$dst1="images/".$tm.$fnm;
	move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
	
	mysqli_query($link,"insert into table1 values (NULL,'$_POST[buyername]','$_POST[productname]','$_POST[productnumber]','$_POST[amount]','$dst1')");
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}

if(isset($_POST["delete"]))
{
	mysqli_query($link, "delete from table1 where buyername='$_POST[buyername]'") or die(mysqli_error($link));
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}

if(isset($_POST["update"]))
{
	mysqli_query($link, "update table1 set buyername='$_POST[productname]' where buyername='$_POST[buyername]'") or die(mysqli_error($link));
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}
?>
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
      <p>BISIKLETA PH, a local bicycle shop composed of the TOTO THE GREAT members offer bike related products and services such as: cyclist clothing and other accessories, spare and replacement parts, tools, and a variety of services. Services may include expert fitting and custom bike building or ordering, maintenance and repairs from experienced bicycle mechanics, and organized group rides and classes A self-service work area may be available and also the foundation for our commitment will be to provide our customers with timely delivery of quality products and services at competitive values create and maintain a positive environment for our customers and employees.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <p>Quezon City, 938 Aurora Boulevard, Cubao, Quezon City.
      <br/>@BisikletaPH@123
      <br/>+ 09856719379    
    </div>
  </div>
  <div class="footer-copyright text-center">© 2020 Copyright: BisikletaPH.com</div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>