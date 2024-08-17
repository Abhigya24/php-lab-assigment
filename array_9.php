<?php 
echo"wap to find the sum of array ";
$arr=array(1,2,3,4,5,6,7,8);
$l=count($arr);
$sum=0;
for($i=0;$i<=$l;$i++){
    $sum=$sum+$arr[$i];
}
echo "the sum of the element of array is ".$sum;
?>