<?php

$arr2 = array('7','7','7');

arrayPrinter($arr=array('2','3','4','5','6','7','8','9',$arr2),$ots='-');

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