<?php
function countDigits($number=false){
    return strlen($number);
}
function stringToArray($number=false){
    return array_map('intval', str_split($number));;
}

function narcissistic($number=false){
    if ($number) {
        $arrayNumber    = stringToArray($number);
        $narcissistic   = 0;
        for ($i=0; $i < countDigits($number); $i++) { 
            $narcissistic   += pow($arrayNumber[$i], countDigits($number));
        }
        return ($number == $narcissistic) ? 'true' : 'false';
    }
}
narcissistic(153);
narcissistic(111);
;?>