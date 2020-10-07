<?php
$GLOBALS['x']=100;
$GLOBALS['y']=150;
cal();
echo "Num 1 is : ".$GLOBALS['num1'];
$addition=calculate($GLOBALS['x']+$GLOBALS['y']);
echo "addition is : ".$addition;
function cal(){
global $num1;
$GLOBALS['num1']=10;
global $num2;
$num2=20;
$result=$GLOBALS['num1']+$num2+$GLOBALS['x'];
echo "result is : ".$result;
}
function calculate($x,$y){
    $result1=$x+$y;
    echo "result 1 is : ".$result1;
    return $result1;
}
?>