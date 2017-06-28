<?php

print_r(vowelCounter("asdbqwdbcieoecmwecnib"));

function vowelCounter($string){
    $vowels = array('a' => 0,'e' => 0,'i' => 0,'o' => 0,'u' => 0,'y' => 0);

    for($i=0;$i<strlen($string);$i++){
        foreach ($vowels as $key => $value)
            if($string[$i] == $value){
                $value++;
            }
        }
    }
    return $vowels;
}