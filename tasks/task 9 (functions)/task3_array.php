<?php

//$arr2 = [7,7,7,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]];

arrayPrinter($arr=[2,3,4,5,6,7,8,9,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]],$ots='-');

function arrayPrinter($array,$ots){

    for($i=0;$i<=count($array);$i++){
        if(!is_array($array[$i])){
            echo "$array[$i] <br>";
        } else {
            if($ots){
                echo implode($ots,$array[$i]);
            } else {
                print_r($array[$i]);
            }
        }
    }
}