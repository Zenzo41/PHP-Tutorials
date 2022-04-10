<?php
$num1=5;
$num2=10;
function multiplication()
{
global $num1;
global $num2;
$answer=$num1*$num2;
return $answer;
}
echo "Num1:".$num1;
echo "<br />";
echo "Num2:".$num2;
echo "<br />";
echo "The multiplication of two numbers is".multiplication();
?>