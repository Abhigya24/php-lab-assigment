<?php 
echo"wap to create and print multi dimensional array <br>";
$arr1 = array(
    array(24,600,200),
    array(23,1000,210),
    array(12,696,190),
);
$arr2 = array(
    array(214,6020,2030),
    array(223,1022,2210),
    array(142,696,1930),
);
$arr3 = array();
for( $i= 0; $i< 3; $i++){
    for( $j= 0; $j< 3; $j++){
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $arr3[$i][$j] = $arr1[$i][$j] + $arr2[$i][$j];
            }
        }
        
    }
}
echo "the sum of arr1 and arr2 is <br>";
for( $i= 0; $i< 3; $i++){
    for( $j= 0; $j< 3; $j++){
        echo $arr3[$i][$j]." ";
    }
    echo "<br>";
}
?>