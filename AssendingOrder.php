<?php
   $a=array(5,4,3,2,1);
   $length=count($a);
   echo "Original Array:>>";
   for($i=0;$i<=$length-1;$i++){
    echo $a[$i]." ";
   }
   echo "<br>";
   for($i=0;$i<=$length-1;$i++){
           for($j=0;$j<=$i;$j++){
            $temp=0;
            if($a[$i]<$a[$j]){
                    $temp=$a[$i];
                    $a[$i]=$a[$j];
                    $a[$j]=$temp;
            }
           }
   }
   echo "Sorted Array:>>";
   for($i=0;$i<=$length-1;$i++){
    echo $a[$i]." ";
   }
?>