
<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Welcome to Bisikelta PH!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<header class="page-header header container-fluid">
<div class="overlay"></div>
<div class="description">
  <h1>Welcome to Bisikelta PH</h1>
 <p>BISIKLETA PH, a local bicycle shop composed of the TOTO THE GREAT members offer bike related products and services such as: cyclist clothing and other accessories, spare and replacement parts, tools, and a variety of services.</p>
<p><a href="about2.php">MORE??<a></p>
</div>
</header>
<div class="w3-content w3-display-container"></br>
  <img class="mySlides" src="images/slide1.jpg" style="width:100%">
  <img class="mySlides" src="images/slide2.jpg" style="width:100%">
  <img class="mySlides" src="images/slide3.jpg" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}



</script>
<div class="container features">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Why BisikletaPH?</h3>
      <img src="images/showcase1.gif" class="img-fluid">
      <p>Our objective is to provide our customers high quality workmanship with a friendly and inviting tone in a clean and upscale atmosphere.  Since we are the mechanics and the bike shop owners you will always know who is working on your bike and will have the confidence that maintenance and repairs are done right.  We specialize in Mountain Bike and Road Bike repair but we will work on anything. We’ll also educate you on proper maintenance and cleaning for your bicycle to keep it in the best and most efficient working condition. </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Why Cycling Is Important?</h3>
      <img src="images/showcase2.jpg" class="img-fluid">
      <p>Cycling is a low impact aerobic exercise that offers a wealth of benefits. It also varies in intensity, making it suitable for all levels. You can cycle as a mode of transport, for casual activity, or as an intense, competitive endeavor.

Cycling is a wonderful workout that keeps you active. It can help shape a healthy lifestyle, both physically and mentally.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">              
    </div>
  </div>
</div>


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