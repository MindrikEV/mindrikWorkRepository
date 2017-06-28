<?php

$arr;

for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        if($i<$j){$arr[$i][$j] = 0;}
        else if($i>$j){$arr[$i][$j] = 2;}
        else {$arr[$i][$j] = 1;}
    }
}

for($i=0;$i<4;$i++){
    echo "<br>";
    for($j=0;$j<4;$j++){
        echo $arr[$i][$j];
    }
}

?>