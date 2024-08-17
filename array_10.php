<?php
$arr1 = array(
    array(2,6,2),
    array(3,10,2),
    array(1,6,24),
);
$largest=0;

for( $i= 0; $i< 3; $i++){
    for( $j= 0; $j< 3; $j++){
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if($arr1[$i][$j]>=$largest){
                    $largest = $arr1[$i][$j];
                }
            }
        }
    }
}
echo"the largest element is ".$largest ;
?>