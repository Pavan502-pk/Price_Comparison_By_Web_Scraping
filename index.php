 <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Smart Buy</title>

<style>
  .right 
  {
  position: absolute;
  right: 0px;
  width: 300px;
  padding: 100px;
  }
  .card
  {
	  
	  margin:15px;
	  border-radius:15px;
  }
  img
  {
	  height:180px;
  }
  span
  {
	  font-weight:bolder;
	  font-size: large;
  }

  .card-text
  {
	  font-weight:bolder;
	  font-size: large;
  }
  h5{
    margin:0;
    margin-left:15%;
  }
</style>  
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark btn-dark">
<div class="right">
       
<p1><span id="time"> </span></p1></div>
<script type ="text/javascript">  
 `use strict`;
function refreshTime() {
  const timeDisplay = document.getElementById("time");
  const dateString = new Date().toLocaleString();
  const formattedString = dateString.replace(", ", "  ");
  timeDisplay.textContent = formattedString;
}
  setInterval(refreshTime, 5000);

`use strict`
var datetime = new Date().getMonth() + 1;
console.log(datetime); // it will represent date in the console of  developers tool
document.getElementById("time").textContent = datetime; // represent on html page

`use strict`
var datetime = new Date().toDateString();
console.log(datetime); // it will represent date in the console of developer tool
document.getElementById("time").textContent = datetime; // represent on html page

 </script>
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Smart Buy</a>
<div id="location"></div>
    <script>
      var div  = document.getElementById("location");
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
          div.innerHTML = "The Browser Does not Support Geolocation";
        }
      }

      function showPosition(position) {
        div.innerHTML = "Location:<br>"+"Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
      }

      function showError(error) {
        if(error.PERMISSION_DENIED){
            div.innerHTML = "The User have denied the request for Geolocation.";
        }
      }
      getLocation();
</script></h5>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <!--li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-dark" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li-->

    </ul>
    
</nav>
<!--/.Navbar-->
<br><br>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
<body style="background-color:b5b29e;">
    <h1>Smart Buy</h1>
    <h5>~Purchase your products at ease</h5>
    <p>Here you can compare prices of any product by entering below in the search bar</p>
</body>
</div>
</div>

<br><br>
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="index.php" method="POST">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" name="searchtext" value=""
    aria-label="Search"><br><br>
  <input class="btn btn-dark btn-rounded " type="submit" value="Search">
</form>

<!--Section: Group of personal cards-->
<section class="pt-5 mt-3 pb-3">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="flp.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">Results from Flipkart</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			 <?php
require 'simple_html_dom.php';


$searchtext="";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$searchtext = $_POST["searchtext"];

}
$searchtext = str_replace(' ', '%20', $searchtext);
$flp_str1="https://www.flipkart.com/search?q=";
$flp_str2="&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off";
$flp_query=$flp_str1.$searchtext.$flp_str2;

$html = file_get_html($flp_query);


#1
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";


#2
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";

#3
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";

#4

if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";
?>
			
			
			
			
			</p>
            
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="amz.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">Results from Amazon</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			<?php


$amz_str1="https://www.amazon.in/s?k=";
$amz_str2="&ref=nb_sb_noss_2";

$amz_query=$amz_str1.$searchtext.$amz_str2;



$html = file_get_html($amz_query);

#1

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";


#2

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";

#3

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";

#4

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";

?>
</p>
            
          </div>
          <!--Card content-->

        </div>
        <!--Card-->


      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Group of personal cards-->


<!-- Footer -->
<footer class="page-footer font-small  pt-4 btn-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Smart Buy</h5>
        <p>Here you can compare prices of any product.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Marketing sites</h5>

        <ul class="list-unstyled">
          <li>
            <a>Amazon</a>
          </li>
          <li>
            <a>Flipkart</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.amazon.com/" target="_blank">amazon.com</a>
          </li>
          <li>
            <a href="https://www.flipkart.com/"target="_blank">flipkart.com</a>
          </li>
        
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer text-center">
    <a> Created by Batch A-13 of CSE-1 VIIT</a>
  
<script type ="text/javascript">
function liveViews(response) {
    document.getElementById('visits').innerText = response.value;
}
</script>
    <script src="https://api.countapi.xyz/hit/http://localhost/price/index.php/visits?callback=liveViews" async></script>
<p>This page got <span id="visits"></span> views.</p>

</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




















<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>