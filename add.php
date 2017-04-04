<!DOCTYPE html>
<html>
<head>
	<title>Title 1</title>
</head>
<body style="background-color: cyan; color: brown">

<h2 style="color: maroon">Heading 2</h2>

<?php

$v = "variables";
$k = "Coding is :-)";
$l = "Friday";
$m = 134.453;
$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;
$f = 6;
$g = 7;
$h = 8;
$i = 9;
$j = 10;
$a = $a + $b;
$b +=100;//assigning $b a new value by incrementing it
$c -=20;
$d -=1;
$age = 50;
$grade = 70;
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
var_dump($a != $b); echo "The value of $a is not equal to $b";
echo "<br>";
var_dump($a == $d); echo "The value of $a is equal to $d";
echo "<br><br>";
var_dump($a == $e); echo "The value of $a is not equal to $e";
echo "<br><br>";
var_dump($a != $d); echo "The value of $a is not equal to $b";
echo "<br>";
//if statements
if ($a== $d) {
	echo " Wambui <br><br><br>";
}
?>
//vamp_dump ($g !==$h); 
<h3 style="color: black"> If else statements </h3>
<?php
if ($age<18){
	echo "You will not attend <br><br>";
}
elseif ($age >40) {
	echo "YOU ARE TOO OLD TO ATTEND <br><br>";
}
else{
	echo "You will ATTEND <br><br>";
}
if ($grade < 40){
	echo "YOU HAVE FAILED";
}
elseif ($grade =40 && $grade <=49) {
	echo "YOU HAVE A D";
}
elseif ($grade =50 && $grade <=59) {
	echo "YOU HAVE A C";
}
elseif ($grade =60 && $grade <=69) {
	echo "YOU HAVE A B";
}
else{
	echo "YOU HAVE AN A";
}
?>
</body>
</html>
