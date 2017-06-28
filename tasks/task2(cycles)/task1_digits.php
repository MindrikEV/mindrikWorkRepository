<?php

//even - четный, odd - нечетный
    $counterOfEven=0;
    $sumOfOdd=0;
    $sumOfEven=0;
    $averageEven=0;
    for($i=48;$i>=-74;$i--){
        if($i%2 == 0){
            $counterOfEven++;
            $sumOfEven += $i;
        } else {
            $sumOfOdd += $i;
        }
    }

    $averageEven = $sumOfEven / $counterOfEven;

    echo "Количество четных элементов = $counterOfEven в интервале (от -74 до 48) <br>";
    echo "Сумма нечетных элементов =  $sumOfOdd в интервале (от -74 до 48) <br>";
    echo "Среднее значение элементов кратных 2-м = $averageEven <br>";

    $simple = 0;

    for($i=2;$i<=48;$i++){
        for($j=2;$j<$i;$j++){
            if($i%$j==0) {
                break 1;
            } else {
               echo $i;
               break 1;
                //$simple++;
            }
        }
    }
    //echo $simple;
