<?php
//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function evenOrOdd($number){
    
if ($number%2==0) {
    return true;
} else {
    return false;
    # code...
}

}
//2. 1+2+3...…….100  Write a loop to calculate the summation of the series
$number=15;
if (evenOrOdd($number)) {
    echo $number. " is an even number";
    # code...
} else {
    echo $number. " is an odd number";
    # code...
}
echo PHP_EOL;
$num=0;
for ($i=0; $i <=100 ; $i++) { 

    $num+=$i;
}
echo "1+2+3+.....+100={$num}";



 
 
 

