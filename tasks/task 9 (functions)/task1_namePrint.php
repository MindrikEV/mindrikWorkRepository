<?php

namePrint("Vasili");

function namePrint($name){
    for($i=0;$i<strlen($name);$i++){
        echo "$name[$i] <br>";
    }
}