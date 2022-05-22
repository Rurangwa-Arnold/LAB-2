<?php
function calculate2(float $num1,string $opp,float $num2): float{
    if (!in_array($opp, ['+','-','*','/'])) {
        return 0;
    }
    $function_name =['+' => 'sum',
'-' => 'diff',
'*' => 'multply',
'/' => 'div' ];
    return $function_name [$opp]($num1, $num2);
}
