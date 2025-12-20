<?php
$numbers=array(20,40,50,14,90);
$max=$numbers[0];
$min=$numbers[0];
foreach($numbers as $num)
{
	if($num>$max)
		{
			$max=$num;
		}
	if($num<$min)
		{
			$min=$num;
		}
}

print "Maximum number is =$max" ."<br>";
print "Minimum number is =$min"."<br>";
?>