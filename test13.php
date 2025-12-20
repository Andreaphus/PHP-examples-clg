<?php
$a=0;
$b=1;
$n=10;
print "$a $b ";
for($i=1;$i<=$n-2;$i++)
{
$c=$a+$b;
print "$c\n";
$a=$b;
$b=$c;
}
?>