<!doctype html>
<html>
 <head>
 	<meta charset="utf-8">
  	<title>parchibald.cs53.11b.home</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
 
	<style>
	body {background:#dedbef;}
	form {	
		border: 2px solid #d1d797;
		margin: 10px 0;
		padding: 5px 10px;
	}	
</style>
 
 
 
</head>
<body>

	<div class="navbar">
	  <div class="navbar-inner">
	    <a class="brand" href="#">Links</a>
	    <ul class="nav">
	      	<li class="active"><a href="../../index.html">home</a></li>
			<li><a href="web-programming-spring-2013/lesson-02/index.php">lesson-02</a></li>
			<li><a href="web-programming-spring-2013/lesson-03/">lesson-03</a></li>
			<li><a href="web-programming-spring-2013/lesson-04/">lesson-04</a></li>
			</ul>
	  </div>
	</div>
	 
 
	<div class="container">
 	<header>
 		<img src="../../images/Sasha.jpg" width="230" height="307" alt="best friend">
 
	    <hgroup>
    	    <h1>Paul Archibald</h1>
     	  	<h4>CS 53.11b: Advanced Web Programming with PHP/MySQL (Spring 2013)</h4>
    	</hgroup>
		<p>
 		I have been struggling with git for days now, but I think I may be getting a handle on it. <br>
 		I have two Macs, an old PowerBook G4 (PowerPC), and a Core Solo (32-bit Intel) Mini. <br>
 		The Powerbook is of course a PPC, so getting modern software for it is nearly impossible, and its stuck at<br>
 		OS X 10.5 Leopard. The Mini is 32-bit, which means it is stuck at Snow Leopard (10.6). And GitHub is only for <br>
 		10.7 and above. Geez.
 		<br><br>
 		Okay, I finally got git to work from the command line. I hope I can remember how I did it!
 		<br><br>
 		I am working on my workflow now. I am editing with Eclipse, which has some code formatting stuff<br>
 		I like. I also have Filezilla running, and just realized it has a nice feature: it notices<br>
 		when there have been changes made to the text, and automatically prompts me to upload the changes. Nice.<br>
		</p>
     
 	</header>
	</div>
	
	<div class="container">
	
	<?php 
	//check to see if the page is loading from a POST request
	if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
	// if there was a POST, create a confirmation page 
	//  the age function calculates age in years based on a date passed as an argument
	function age($birthdate) {
		return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
	}	
	// assign the result of calling the age( ) function passing the input date as the argument to a variable
	$age =  age($_POST['birthdate']);
	// determine if the value of the variable is greater than 21
	if ($age > 21) {
		// if so, display a positive result , including the age and a smiley face image
		?>
		<h2 style="color:green">You are <?php echo intval($age) ?>, Have fun, but drink responsibly.</h2>
		<img src="http://nelsonaspen.com/blog/wp-content/uploads/2012/05/smile.jpg" width=100 height=100 />
		<?php
	
	} else {
		//otherwise display a negative result, with a frowny face
		?>
		<h2 style="color:red">Sorry, you are  <?php echo intval($age) ?> , too young.  How about some root beer?</h2>
		<img src=http://ronekissrichmond.files.wordpress.com/2011/11/frown1.jpg width=100 height=100 />
		<?php
	}
	} else {
		// if there wasn't a POST, display an input form  using an input type of date - which is supported in Chrome
		?>
		<form action="" method="post">
		Enter your birthdate to find out if you are of drinking age: <input name="birthdate" type="date">
		<input name="" type="submit">
		</form>
		<?php
	}
	?>
	</div>
 
 
 </body>
</html>