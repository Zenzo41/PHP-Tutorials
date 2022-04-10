<?php
$name='Joel';
echo "My name is $name.I am a student of BIM.";
echo "<br />";
echo "My name is {$name}.I am a student of BIM.";
echo "<br />";
/////////////String Concatenation
$a='water';
$b='bottle';
$c=$a.$b;
echo $c;
echo "<br />";

////////////String built-in functions
$var="   My name is Sonam Syangbo.   ";
$var2="hello";
print trim($var);

$var=trim($var);//removes white space from both left and right side of the string 
print "<br>";

print strlen($var);
print "<br>";

print strtoupper($var);
print "<br>";

print strtolower($var);
print "<br>";

print ucwords($var);
print "<br>";//converts the first letter of each word in Uppercase

print substr($var,6,17);//gives the substring from the index set index(6) to the another index(17)
print "<br>";

print str_replace("hello","hi",$var2);//first parameter as searched string and second one to replace as
print "<br>";

print strcasecmp($var2,"hello");// binary case insensitive comparison returns the difference of two strings 
print "<br>";

print strcmp($var2,"Hello");//case sensitive 
print "<br>";
// print strpos($var,"Sonam");//returns the index of the given string in the first occurence

$word_count=str_word_count($var);
print $word_count;
print "<br>";

echo "The reverse of hello is ".strrev($var2);
print "<br>";

echo "The position of el in hello is ".strpos($var2,'el');
?>