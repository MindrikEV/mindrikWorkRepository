<?php

$arr;

/*for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        if($i<$j){$arr[$i][$j] = 1;}
        else if($i>$j){$arr[$i][$j] = 2;}
        else {$arr[$i][$j] = 0;}
    }
}*/
$n = 3;

for($i=0;$i<$n;$i++){
    for($j=0;$j<n;$j++){
        if($i + $j == $n-1){$arr[$i][$j] = 1;}
       // else if($i>$j){$arr[$i][$j] = 2;}
       // else {$arr[$i][$j] = 0;}
    }
}

for($i=0;$i<4;$i++){
    echo "<br>";
    for($j=0;$j<4;$j++){
        echo $arr[$i][$j];
    }
}

?>