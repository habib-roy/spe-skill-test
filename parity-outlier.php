<?php
function isOdd($number=false){
    return ($number % 2) ? false : true;
}
function parityOutlier($array){
    $countOdd = 0;
    $countEven = 0;
    for ($i=0; $i < count($array); $i++) { 
        if(isOdd($array[$i])) {
            $countOdd++;
            $oddKey=$i;
        }else{
            $countEven++;
            $evenKey=$i;
        }
    }
    if ($countOdd == 1){
        return $array[$oddKey];
    } elseif ($countEven == 1) {
        return $array[$evenKey];
    } elseif ($countOdd == count($array)) { // Unfinished
        return 'false'; 
    }
}

echo parityOutlier([2,4,0,100,4,11,26,02,36]);
echo parityOutlier([160,3,1719,19,11,13,-21]);
echo parityOutlier([11,13,15,19,9,13,-21]);
;?>