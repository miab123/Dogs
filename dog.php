<?php 

include('doglist.php');

$breed = $_GET['breed'];

$Dog = $Dogs[$breed];


?><!DOCTYPE html>
<html>
<head>
	<title>le dog website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Arimo|Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body class="dog-single">


<div id="content"> 
	<header>
		<h1><?php echo $Dog['name']; ?></h1>
		

	</header>
	<p> <img src="<?php echo $Dog['image'] ?>" class="single-img"> </p>

	<div style="clear:both;"></div>
</div>
</body>
</html>