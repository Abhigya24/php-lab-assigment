<?php
echo "wap to sort the array in assending <br>";
$array1= array(5,1,3,2,7,24);
$length = count($array1);
$length--;

for($i= 0; $i<=$length;$i++){
    for($j=0;$j<=$i;$j++){
        if($array1[$i]< $array1[$j]){
            $temp= $array1[$i];
            $array1[$i]=$array1[$j];
            $array1[$j]= $temp;
        }
    }
}for($i= 0; $i<=$length;$i++){
    echo $array1[$i]. " , ";
}
?>