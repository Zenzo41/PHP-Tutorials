<?php
function swap(&$arg1,&$arg2)//passing the address as parameter(reference)
{
    $temp=$arg2;
    $arg2=$arg1;
    $arg1=$temp;
}
$num1=4;#assigning values in a separate variables
$num2=5;
echo "The values before swapping are:".$num1."and".$num2;
echo "<br />";
swap($num1,$num2);
echo "The values after swapping are:".$num1."and".$num2;
?>