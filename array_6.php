<?php 
echo"wap to create and print multi dimensional array ";
$bikes = array(
    array("CBR600",600,200),
    array("BMW",1000,210),
    array("ducati",696,190),
);
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo$bikes[$i][$j]." <br>";
    }
    echo"<br>";
}
?>