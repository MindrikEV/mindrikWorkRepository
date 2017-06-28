<?php

months("май");


function months ($monthName){
    switch ($monthName){
        case "январь":
            echo "31";
            break;
        case "февраль":
            echo "28";
            break;
        case "март":
            echo "31";
            break;
        case "апрель":
            echo "30 дней";
            break;
        case "май":
            echo "31 день";
            break;
        case "июнь":
            echo "30 дней";
            break;
        case "июль":
            echo "31 день";
            break;
        case "август":
            echo "31 день";
            break;
        case "сентябрь":
            echo "30 дней";
            break;
        case "октябрь":
            echo "31 день";
            break;
        case "ноябрь":
            echo "30 дней";
            break;
        case "декабрь":
            echo "31 день";
            break;
    }
}