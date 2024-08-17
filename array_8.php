<?php 
echo"wap to create and print multi dimensional array <br>";
$arr1 = array(
    array(2,6,2),
    array(3,10,2),
    array(1,6,10),
);
$arr2 = array(
    array(24,60,30),
    array(23,22,22),
    array(2,6,10),
);
$arr3 = array();
for( $i= 0; $i< 3; $i++){
    for( $j= 0; $j< 3; $j++){
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $arr3[$i][$j] = $arr1[$i][$j] * $arr2[$i][$j];
            }
        }
        
    }
}
echo "the product of arr1 and arr2 is <br>";
for( $i= 0; $i< 3; $i++){
    for( $j= 0; $j< 3; $j++){
        echo $arr3[$i][$j]." ";
    }
    echo "<br>";
}
?>