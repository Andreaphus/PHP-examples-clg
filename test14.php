<?php
$start=1;
$end=50;
for($num=$start;$num<=$end;$num++)
{
$prime=true;
	for($i=2;$i<$num;$i++)
	{			
			if($num%$i==0)
			{
			$prime=false;
			break;
			}
	}

if($prime && $num>1)
	{
		print  $num." ";
	}
}
?>