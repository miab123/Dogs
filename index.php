<?php 

$Mia = array(
	'name' => 'Mia',
	'Age' => 15,
	'Location' => 'Portland'
);

$names = array(
	'Alex',
	'Billy',
	'Dale',

);

$b = 45;
$c = 5;
$d = 23;
$link = 'Google';


echo "hello world <br> <b>This text is bold</b>";
 

echo '<a href="http://www.google.com">Click here</a>';

echo '<br> <a href="http://www.google.com">' . $link . '</a>';

echo '<pre>', print_r($Mia, true), '</pre>';

echo $names[0];
echo '<pre>', print_r($names, true), '</pre>';
?>