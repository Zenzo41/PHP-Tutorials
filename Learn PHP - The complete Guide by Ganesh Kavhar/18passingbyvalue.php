<?php

function cube($num1)#passing the value directly as parameter
{
    return $num1*$num1*$num1;
}

$answer=cube(3);#no need to assign the value 3 in different variable
echo "The cube of num1 is".$answer;
?>