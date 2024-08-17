<?php 
echo "wap to find the largest element in array <br>";
$arr = array(34,4,1,5,3,3);
$lenght = count($arr);
$largest = $arr[0];
for($i=1;$i<=$lenght-1; $i++){

    if($arr[$i]>$largest){
        $largest = $arr[$i];
    }
}
echo "the largest number in array is ".$largest;

?>