<?php
function me(string $test):void{
    echo $test;
}
me('parameters:');
function word(int $count):void{
    if($count == 0) {
    return ;
}
me(' -------- HELLO WORLD -------   ');
word(--$count);
}
word(5);