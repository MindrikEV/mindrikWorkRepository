<?php

print_r(arrayMaker(10,7));

function arrayMaker($n,$x){
    for($i=0;$i<$n;$i++){
        $arr[$i] = $x;
    }
    return $arr;
}