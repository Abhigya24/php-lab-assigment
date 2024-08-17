<?php

echo"wap to sort array";
 $arr= array(12,23,212,1,33442,2342);
 $temp=0;
 for($i=0 ; $i<=5;$i++){
		 if($arr[$i]>$arr[$i+1]){
			 $temp= $arr[$i];
			 $arr[$i]=$arr[$i+1];
			 $arr[$i+1]= $temp;
		 }
 }
  foreach ($arr as $a ) {
	   echo $a ." ";
	   
	   }
	?>