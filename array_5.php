<?php 
echo " wap to find the smallest number";
$arr = array(1,4,9,3,5,6,7);
$smallest= $arr[0];
for ($i = 1; $i < count($arr); $i++) {
    if($smallest>$arr[$i]){
        $smallest = $arr[$i];
    }
}
echo "the smallest is ".$smallest;
?>