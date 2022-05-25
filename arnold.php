<?php
function test(string $text):void {
    echo($text);
}
test('paragraph');
function call(int $count=1):void {
    if ($count == 0) {
        return;
    }
    test('Big World')
}
call(5);