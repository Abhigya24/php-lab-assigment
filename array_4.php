<?php
echo"wap to find index of element in array ";
$arr = array(1,2,3,322,33,44,33,22,24);
$index =0;
for( $i = 0; $i < count($arr);$i++){
    if( $arr[$i] == 24){
        $index = $i;
    }
}
if( $index == 0){
    echo "array not found d";
}else{
    echo "array fouund at index [".$index."]";
}
?>