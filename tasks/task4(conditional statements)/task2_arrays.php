<?php

var_dump(vowelCounter("aoafefzxcvbnk7rerqwertyuiopasdfghjklzxcvbnmsdbqwdybcieoeycymywoeoconib"));

function vowelCounter($string){
    $vowels = ['a' => 0,'e' => 0,'i' => 0,'o' => 0,'u' => 0,'y' => 0];

    for($i=0;$i<=strlen($string);$i++){
        foreach ($vowels as $key => &$value) {
            if (strcmp($string[$i], $key)) {
                $value++;
                //unset($value);
                break;
            } //else {
              //  continue;
            //}
        }
    }
    echo "STRING:   ".$string."<br>";
    return $vowels;
}