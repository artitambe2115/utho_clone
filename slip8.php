<?php
$a=$_GET["str1"];
$b=$_GET["str2"];

$len1=strlen($str1);
$len2=strlen($str2);

if(len1>str2)
{
$a=$str1;
$b=$str2;
}
else
{
    $a=$str2;
    $b=$str1;  
}
$pos=strpos($a,$b);
if($pos==0)
{
    echo "b is at the starting of a";
}