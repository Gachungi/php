
<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
</head>
<body style="background-color: pink; color: purple; font-size: 20px ">

<h2 style="color: black">Functions</h2>

<?php
	$p=30000;
	$r=0.05;
	$t=3;

function func (){
	echo "Learn function";
}
func();
echo "<br>Today I want to....";
func();
$a = 20;
$b = 10;
function add (){
	global $a, $b;
	$c = $a +$b;
	echo $c;
}
echo "<br><br>";
add ();
echo "<h2>Area of a Rectangle</h2>";
function area (){
	global $a, $b;
	$c = $a * $b;
	echo "The area of a rectangle is length $a by height $b = $c ";
}
area ();
echo "<br>";

echo "<h2>Calculating Interest </h2>";
echo "<br>";

function interest()
{
	global $p, $r, $t;
	$interest=$p*$r*$t;
	echo "$interest";
}
echo "The interest accrued after $t years when the principle is $p and the rate is $r = ";
interest();
//echo "<h2>Calculating Area of a triangle </h2>";
echo "<br>";
$password ="wambo";
result=md5($password);
echo "$result <br>";
echo ucfirst "My name is wambui";
?>
</body>
</html>