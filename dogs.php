<?php 

include('doglist.php');

?><!DOCTYPE html>
<html>
<head>
	<title>le dog website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Arimo|Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="content"> 
	<header>
		<h1>These are dogs</h1>
		<h2>Different Dogs:</h2>

	</header>
	<ul class="dog-list"> 
<?php foreach ($Dogs as $key => $Dog): ?>
	<li style="background-image: url('<?php echo $Dog['image'] ?>')">
		<h3>
		<?php $showLink = true ?>
		<?php if ($showLink): ?>
			<a href="dog.php?breed=<?php echo $key ?>">
		<?php endif ?>

		<?php echo $Dog['name'] ?>

		<?php if ($showLink): ?>
			</a>
		<?php endif ?>

		</h3>
		<img src="<?php echo $Dog['image'] ?>">
	</li>

<?php endforeach ?>

	</ul>

	<div style="clear:both;"></div>
</div>
</body>
</html>