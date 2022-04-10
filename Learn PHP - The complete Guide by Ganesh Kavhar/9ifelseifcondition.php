<?php
$score=50;
if($score>100)
echo "Error: Value shouldn't exceed 100.";
else if($score<0)
echo "Error: Value shouldn't be less than 0";
else if($score>=35)
echo "You passed!!";
else 
echo "You failed."; 
?>