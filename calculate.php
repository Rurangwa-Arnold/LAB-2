<?php
function sum(float $num1,float $num2): float { 
    return  $num1 + $num2;
}
function diff(float $num1,float $num2): float {
    return $num1 - $num2;

}
function div(float $num1,float $num2): float {
    return $num1 / $num2;
}
function multiply(float $num1,float $num2): float {
    return $num1 * $num2;
}


echo sum (10,2)."<br/>";
echo diff (10,2). "<br/>"; ;
echo div (10,2). "<br/>";
echo multiply (10,2). "<br/>";
function operators(float $num1,string $opp,float $num2): float{
    if (!in_array($opp, ['+','-','*','/'])) {
        return 0;
    }
    $function_oprator =['+' => 'sum',
'-' => 'diff',
'*' => 'multply',
'/' => 'div' ];
    return $function_oprator[$opp]($num1, $num2);
}
function calculate(float $num1,string $opp,float $num2){
    if(!($opp == '+' or $opp == '-' or $opp == '/' or $opp == '*')){
        return 0;
    }
    switch ($opp) {
        case '+': return sum($num1,$num2);
        case '-': return diff($num1,$num2);
        case '*': return multiply($num1,$num2);
        case '/': return div ($num1,$num2);
    }
}
echo calculate(1,'+',2)."<br/>";
echo calculate(1,'-',2)."<br/>";
echo calculate(1 ,'*',2)."<br/>";
echo calculate( 1 ,'/',2)."<br/>";