<?php
//////////////////USING STRING AND INTEGER DATA TYPE
$string="I will be back by";
$time=5;


//////////////////NULL DATA TYPE
echo"$string $time.";
print "<br />";
$num1=null;
if($num1!=null){
    echo " The number is not null";
}
else
echo "The number is null";
print "<br />";
print "<br />";


/////////////////USING VAR_DUMP FUNCTION
echo "The value given by var_dump for string is: "; var_dump($string);
print "<br />";
echo "The value given by var_dump for time is: "; var_dump($time);
print "<br />";
echo "The value given by var_dump for num1 is: "; var_dump($num1);
echo "<br />";
echo "<br />";


/////////////////ARRAY DATA TYPE
$cars=array('BMW','FERRARI','JAGUAR','ASTON MARTIN');
echo "$cars[0]";
echo "<br />";
echo "$cars[1]";
echo "<br />";
echo "$cars[2]";
echo "<br />";
echo "$cars[3]";
echo "<br />";


?>
