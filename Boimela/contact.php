<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="from.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: Right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 1px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<ul>
   <li><a href="index.php?logout='1'">Logout</a></li>
  <li><a href="contact.php?">Contact</a></li>
  <li><a href="home.php?">Home</a></li>
</ul>
<div class="header">
  	<h2>Contact</h2>
  </div>
	 
  <form method="post" action="contact.php">
  	
  	<div class="input-group">
  		<label>Admin:	Boimela.com</label>
  		
  	</div>
  	<div class="input-group">
  		<label>Admin Phone Number:	+8801384813000</label>
  		
  	</div>
                  <div class="input-group">
  		<label>Adress:	Panthapath, Dhaka, Bangladesh</label>
  		
  	</div>
                    <div class="input-group">
  		<label>Office Hour:	10am-5pm</label>
  		
  	</div>
                  <div class="input-group">
  		<label>Email:	darkweb2470@gmail.com</label>
  		
  	</div>






  
</footer>
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
</body>
</html>