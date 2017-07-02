<?php

print_r(giveAllA("uhuaabauibyiayabiuavaopaaiubaoaabaobaibaaobahvyua"));

function giveAllA($string){
    for($i=0;$i<strlen($string);$i++){
        if($string[$i] == "a"){
            $result[] = $i;
        }
    }
    return array_reverse($result);
}