<!DOCTYPE html>
<html>
<head>

	<title>Title 1</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="container">
<body style="background-color: pink;  font-size: 20px">

<h2 style="color: brown">Assignment</h2>
<h3 style="color: brown">Calculations</h3>
<?php
$b = 20;
$h = 100;
$c = 0.5;
$a = "Area";
$p = 30000;
$r = 5/100;
$y = 2;

echo "$a of a triangle is $c multiply by base and height = "  . $c * $b * $h;
echo "<br><br>";
echo "The interest accrued after $y years when the principle is $p and the rate is $r =" . $p * (1 +($r *2));
echo "<br><br>";
?>
<h3 style="color: brown">Leap Year</h3>
<?php
$year = 2008;
$mod = $year%4;
if ($mod== 0 )
{
	echo $year."  This is a Leap Year";
}
else{
	echo $year." This is not a leap year";
}
?>
<h3 style="color: brown">Greatest Number of Three</h3>
<?php
$num1 = 10;
$num2 = 50;
$num3 = 88;

if ($num1> $num2 && $num1 > $num3) {
	echo "$num1 is the greatest number of the three ($num1, $num2, $num3)<br><br>";
}
elseif ($num2 >$num1 && $num2 >$num3) {
	echo "$num2 is the greatest number of the three ($num1, $num2, $num3)<br><br>";
}
elseif ($num3 >$num1 && $num3 >$num2) {
	echo "$num3 is the greatest number of the three ($num1, $num2, $num3)<br><br>";
}
else{
	echo "INVALID";
}
?>
<hr>
<div class="row">
<div class="col-sm-4">
<h3 style="color: brown"> Change first letter to UpperCase</h3>
<?php
echo ucfirst("hi wambui");
?>
</div>
<div class="col-sm-4">
	<h3 style="color: brown"> Change first letter to LowerCase</h3>
<?php
echo lcfirst("Hi wambui");
?>
</div>
<div class="col-sm-4">
	<h3 style="color: brown"> Change the string to UpperCase</h3>
<?php
echo strtoupper("Hi wambui");
?>
</div>
</div>
</body>
</div>
</html>