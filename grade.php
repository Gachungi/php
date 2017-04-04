<!DOCTYPE html>
<html>
<head>
	<title>Grade</title>
</head>
<body style="background-color: pink; color: purple; font-size: 20px ">

<h2 style="color: black">If, Elseif and Else Statements</h2>


<?php

$grade = 19;

if ($grade < 40){
	echo "You got $grade you have an E <br><br>";
}
elseif ($grade >=40 && $grade <=49) {
	echo "You got $grade you have a D <br><br>";
}
elseif ($grade >=50 && $grade <=59) {
	echo "You got $grade you have a C <br><br>";
}
elseif ($grade >=60 && $grade <=69) {
	echo "You got $grade you have a B <br><br>";
}
elseif ($grade >=70 && $grade <=100) {
	echo "You got $grade you have an A <br><br>";
}
else{
	echo " $grade is INVALID";
}
?>
<h2 style="color: black"> Using Switch</h2>
<?php
$month = 7;
switch ($month) {
	case '1':
		echo "January";
		break;
	
	case '2':
		echo "February";
		break;

	case '3':
		echo "March";
		break;

	case '4':
		echo "April";
		break;
	
	case '5':
		echo "May";
		break;

	case '6':
		echo "June";
		break;

	case '7':
		echo "July";
		break;
	
	case '8':
		echo "August";
		break;

	case '9':
		echo "September";
		break;

	case '10':
		echo "October";
		break;
	
	case '11':
		echo "November";
		break;

	case '12':
		echo "December";
		break;
	default:
		echo "INVALID";
		break;
}
?>
<h2 style="color: black"> Using While Loop</h2>
<?php
$a =1;
$b =1;
while($a <= 5) {
    echo "The number is: $a <br>";
    $a++;
} 

echo "<h2>do... While Loop<br></h2>";
do {
	echo "The number is: $b <br>";
	$b++;
} while ( $b <= 5);

echo "<h2> For <br></h2>";
for ($a=0; $a <5 ; $a++) { 
	echo "The number is: $a <br>";
}
echo "<h2> Foreach <br></h2>";
$name = array("wambui", "wambo", "kui");
foreach ($name as $value) {
	echo "$value<br>";
}
echo "<h2>Example 2</h2><br>";
$c = 4;
$d = 5;
$e = 6;


?>

</body>
</html>
