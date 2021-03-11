<!DOCTYPE html>

<html lang="en">

 <head>
    <title>Welcome to Bisikelta PH!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
<form action="insert.php" method="POST">
  <div>
   <p>
    <label>Name :</label>
    <input type="text" name="username" required>
   </p>
   <p>
    <label>Password :</label>
    <input type="password" name="password" required>
   </p>
   <p>
    <label>Gender :</label>
    </p>
	<p>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </p>
   
   <p>
    <label>Email :</label>
    <input type="email" name="email" required>
   </p> 
   <p>
    <label>Phone no :</label>
    </p>
	<p>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="63">+63</option>
      <option value="64">+64</option>
      <option value="65">+65</option>
      <option value="66">+66</option>
      <option value="67">+67</option>
      <option value="68">+68</option>
     </select>
     <input type="phone" name="phone" required>
	 </p>
   <p>
    <input type="submit" value="Submit" id="btn" onclick="myFunction()">
   </p>
 </div>
 </form>
 </div>
   
 <script>
function myFunction() {
  var txt;
  if (confirm("Confirm Log-In?")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script> 

<br>
  
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